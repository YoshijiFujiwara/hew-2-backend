<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionStoreRequest;
use App\Http\Resources\GroupResource;
use App\Http\Resources\SessionResource;
use App\Http\Resources\SessionWithAllowUsersResource;
use App\Http\Resources\UserResource;
use App\Model\Session;
use App\User;
use Carbon\Carbon;
use GPBMetadata\Google\Api\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use mysql_xdevapi\Collection;
use Pusher\Laravel\Facades\Pusher;

/**
 * @group session イベントセッション
 */
class SessionController extends Controller
{
    /**
     * sessions.index 管理しているセッション一覧
     *
     * @responseFile 200 responses/sessions.index.200.json
     */
    public function index(Request $request)
    {
        return SessionResource::collection($request->user()->managedSessions);
    }

    /**
     * sessions.index_with_only_allow_users 管理しているセッション一覧(allow ユーザーのみを取得した、セッション情報を返す)
     *
     * @responseFile 200 responses/sessions.index_with_only_allow_users.200.json
     */
    public function indexWithOnlyAllowUsers(Request $request)
    {
        return SessionWithAllowUsersResource::collection($request->user()->managedSessions);
    }

    /**
     * sessions.not_start 始まっていないセッション一覧(【条件式】今 < start_time && deleted_at == null)
     *
     * @responseFile 200 responses/sessions.not_start.200.json
     */
    public function notStart(Request $request)
    {
        return SessionResource::collection($request->user()->notStartSessions);
    }

    /**
     * sessions.on_going 進行中のセッション一覧(【条件式】start_time < 今 < end_time && deleted_at == null)
     *
     * @responseFile 200 responses/sessions.on_going.200.json
     */
    public function onGoing(Request $request)
    {
        return SessionResource::collection($request->user()->onGoingSessions);
    }

    /**
     * sessions.not_payment_complete セッションのendtimeを迎えたもののうち、支払い待ちユーザーがいるセッション一覧。join_status がallowのもののみ判定。(【条件式】end_time < 今 && deleted_at == null && 支払いがまだのユーザーがいる)
     *
     * @responseFile 200 responses/sessions.not_payment_complete.200.json
     */
    public function notPaymentComplete(Request $request)
    {
        $notPaymentCompleteSessions = collect([]);
        $endSessions = $request->user()->endSessions;
        foreach ($endSessions as $key => $endSession) {
            $notPaidFlag = false;
            foreach ($endSession->users as $sessionUser) {
                if (! $sessionUser->pivot->paid && $sessionUser->pivot->join_status == 'allow') {
                    $notPaidFlag = true;
                }
            }

            if ($notPaidFlag) {
                $notPaymentCompleteSessions->push($endSession);
            }
        }

        return SessionResource::collection($notPaymentCompleteSessions);
    }

    /**
     * sessions.history セッション履歴（deleted_atに時間が入っているもの。ようするに、幹事が削除したセッション一覧）(【条件式】deleted_at != null)
     *
     * @responseFile 200 responses/sessions.history.200.json
     */
    public function history(Request $request)
    {
        return SessionResource::collection($request->user()->managedSessions()->onlyTrashed()->get());
    }

    /**
     * sessions.complete end_timeを過ぎて、かつ、支払いも完了しているが、セッション削除はしていない。join_status がallowのもののみ判定。(【条件式】end_time < 今 && deleted_at == null && 全ユーザーの支払いが完了している)
     *
     * @responseFile 200 responses/sessions.complete.200.json
     */
    public function complete(Request $request)
    {
        $completeSessions = collect([]);
        $endSessions = $request->user()->endSessions;
        foreach ($endSessions as $key => $endSession) {
            $notPaidFlag = false;
            foreach ($endSession->users as $sessionUser) {
                if (! $sessionUser->pivot->paid && $sessionUser->pivot->join_status == 'allow') {
                    $notPaidFlag = true;
                }
            }

            if (!$notPaidFlag) {
                $completeSessions->push($endSession);
            }
        }

        return SessionResource::collection($completeSessions);
    }

    /**
     * sessions.store セッションを作成
     *
     * @bodyParam name string required 新規セッションの名前
     * @bodyParam shop_id string  ショップのID(ぐるなび？)
     * @bodyParam budget integer  予算額
     * @bodyParam actual integer  実際の金額
     * @bodyParam unit_rounding integer 丸め単位（1, 10, 100, 1000, 10000）
     * @bodyParam start_time datetime  セッションの開始時刻
     * @bodyParam end_time  datetime  セッションの終了時刻
     *
     * @responseFile 201 responses/sessions.store.201.json
     */
    public function store(SessionStoreRequest $request)
    {
        $newSession = $request->user()->managedSessions()->create($request->all());

        $response = new SessionResource($newSession);
//        // リアルタイム通知
//        Pusher::trigger(self::ADMIN_CHANNEL, self::SESSION_CREATE_EVENT, [
//            'message' => [
//                'manager_id' => $request->user()->id
//            ]
//        ]);

        return $response;
    }

    /**
     * sessions.show 一つのセッションの詳細
     * @queryParam session required セッションid
     *
     * @responseFile 200 responses/sessions.show.200.json
     */
    public function show(Request $request, Session $session)
    {
        return new SessionResource($session);
    }

    /**
     * sessions.show_with_only_allow_users allow ユーザーのみを取得した、セッション情報を返す
     *
     * @queryParam session required セッションid
     *
     * @responseFile 200 responses/sessions.show_with_only_allow_users.200.json
     */
    public function showWithOnlyAllowUsers(Request $request, Session $session)
    {
        return new SessionWithAllowUsersResource($session);
    }

    /**
     * sessions.can_add_users  対象のセッションに追加できるユーザー一覧を返す（自分のフレンド−そのセッションのメンバー）
     *
     * @queryParam session required グループid
     *
     * @responseFile 200 responses/sessions.can_add_users.200.json
     */
    public function canAddUsers(Request $request, Session $session)
    {
        $users = $request->user()->friends()->whereNotIn('id', $session->users()->pluck('id'))->get();

        return UserResource::collection($users);
    }

    /**
     * sessions.can_add_groups  対象のセッションに追加できるグループ一覧を返す（全員がすでにセッションに含まれている場合のみ除く）
     *
     * @queryParam session required グループid
     *
     * @responseFile 200 responses/sessions.can_add_groups.200.json
     */
    public function canAddGroups(Request $request, Session $session)
    {
        $sessionUserIds = $session->users()->pluck('id')->toArray();

        $canAddGroups = collect([]);
        foreach ($request->user()->managedGroups as $managedGroup) {
            $canAddFlag = false;
            foreach ($managedGroup->users()->pluck('id')->toArray() as $groupUserId) {
                if (!in_array($groupUserId, $sessionUserIds)) {
                    $canAddFlag = true;
                }
            }

            if ($canAddFlag) {
                $canAddGroups->push($managedGroup);
            }
        }

        return GroupResource::collection($canAddGroups);
    }


    /**
     * sessions.update セッション情報を更新
     * @bodyParam name string 新規セッションの名前
     * @bodyParam shop_id integer  ショップのID(ぐるなび？)
     * @bodyParam budget integer  予算額
     * @bodyParam actual integer  実際の金額
     * @bodyParam unit_rounding integer 丸め単位（1, 10, 100, 1000, 10000）
     * @bodyParam start_time datetime  セッションの開始時刻
     * @bodyParam end_time  datetime  セッションの終了時刻
     * @queryParam session required セッションid
     *
     * @responseFile 200 responses/sessions.update.200.json
     */
    public function update(Request $request, Session $session)
    {
        $session->update($request->all());

        $response = new SessionResource(Session::find($session->id));
//        // リアルタイム通知
//        Pusher::trigger(self::ADMIN_CHANNEL, self::SESSION_UPDATE_EVENT, [
//            'message' => [
//                'manager_id' => $session->manager->id,
//                'session_id' => $session->id
//            ]
//        ]);

        return $response;
    }

    /**
     * sessions.destory セッションを削除
     * @queryParam session required セッションid
     *
     * @responseFile 204 responses/sessions.destroy.204.json
     */
    public function destroy(Request $request, Session $session)
    {
        $session->delete();

//        // リアルタイム通知
//        Pusher::trigger(self::ADMIN_CHANNEL, self::SESSION_DELETE_EVENT, [
//            'message' => [
//                'manager_id' => $session->manager->id,
//                'session_id' => $session->id
//            ]
//        ]);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
