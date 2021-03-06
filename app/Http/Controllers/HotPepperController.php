<?php

namespace App\Http\Controllers;

use App\Model\Session;
use App\Model\Shop;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * @group hotpepper ホットペッパー検索系
 */
class HotPepperController extends Controller
{
    /**
     * hotpepper.search.favorite ホットペッパーの検索の際に、店IDをおすすめ順に並べ替える。その中に自分のいったことのある店があれば、[1番人気, 2番人気, 行ったことがある]の順に返す。なければ、[1番人気, 2番人気, ３番人気]の順に返す。レスポンス速度があやしい。
     *
     * @bodyParam body 連想配列 required ホットペッパーの検索の際に使う、クエリパラメータをAPIKEYを除いて渡す
     * @bodyParam count int おすすめ店件数（指定なしの場合３件）
     * @bodyParam size int 返却する総件数（指定なしの場合３０件）
     *
     * @response {
     * "data": [
     * "J001098881",
     * "J001182578",
     * "J001100873"
     * ]
     * }
     */
    public function recommend(Request $request)
    {
        // body のクエリ検索条件を解体して、urlを組み立てる
        $url = config('apikey.RECRUIT_WEB_API_URL');
        $url .= '&count=100';

        foreach ($request->body as $key => $value) {
            $url .= '&' . $key . '=' . $value;
        }

        // インスタンス作成
        $client = new Client();
        try {
            // リクエスト送信
            $response = $client->request('GET', $url);
            $result = json_decode($response->getBody());
            $shopInfos = $result->results->shop;
            $shopIds = [];
            // idを抽出する
            foreach ($shopInfos as $shopInfo) {
                $shopIds[] = $shopInfo->id;
            }

            $resultArray = [];
            // todo とりあえず、イベントでの使用数が多い順に並べて
            $recommendIds = Shop::whereIn('shop_id', $shopIds)->withCount('sessions')->get()->sortByDesc('sessions_count')->pluck('shop_id')->toArray();
//            if (isset($recommendIds[0])) {
//                $resultArray[] = $recommendIds[0];
//            }
//            if (isset($recommendIds[1])) {
//                $resultArray[] = $recommendIds[1];
//            }
//
////            dd($recommendIds);
//
//            // todo 自分がイベントで使用したことのある店をさらに先に表示する
//            $managedSessionShopIds = $request->user()->managedSessions()->pluck('shop_id')->toArray();
//            // todo 自分がゲストとして参加したことのある店を次に表示する
//            $participatedSessionShopIds = $request->user()->participatedSessions()->pluck('shop_id')->toArray();
//
//            $alreadyShopIds = array_merge($managedSessionShopIds,$participatedSessionShopIds);
//            $alreadyShopIds = array_unique($alreadyShopIds);
//
//            $alreadyShopIds = array_diff($alreadyShopIds, $recommendIds);
////            dd($alreadyShopIds);
//
//            foreach ($alreadyShopIds as $alreadyShopId) {
//                foreach ($recommendIds as $key => $id) {
//                    if ($key > 1 && $alreadyShopId == $id) {
//                        $resultArray[] = $id;
//                    }
//                }
//            }
//
//            if (count($resultArray) < 3) {
//                for ($i = 2; count($resultArray) < 3; $i++) {
//                    $resultArray[] = $recommendIds[$i];
//                }
//            }

            // おすすめ店舗情報取得
            $i = 0;
            $count = 3;
            if ($request->has('count')) {
                $count = $request->count;
            }
            $size = 30;
            if ($request->has('size')) {
                $size = $request->size;
            }

            foreach ($recommendIds as $id) {
                $i++;
                if ($i > $count) {
                    break;
                }
                $resultArray[] = $id;
            }

            // 残りは上から適当に
            $result = [];
            // 店情報取得
            foreach ($resultArray as $id) {
                $result[] = array_first($shopInfos, function ($value, $key) use ($id) {
                    return $value->id == $id;
                });
            }
            foreach ($shopInfos as $shop) {
                if (array_first($result, function ($value, $key) use ($shop) {
                    return $value->id == $shop->id;
                },true) === true) {
                    $result[] = $shop;
                }
                if (count($result) >= $size) {
                    break;
                }
            }
            $wrap["shop"] = $result;

            return response()->json([
                'results' => $wrap
            ]);

        } catch (ClientException $exception) {
            Log::error('guzzle http error');
        }

    }

    public function test()
    {
        //request先
        $url = config('apikey.RECRUIT_WEB_API_URL');

        $url .= '&count=100&keyword=兵庫';

        // インスタンス作成
        $client = new Client();

        // リクエスト送信
        $response = $client->request('GET', $url);
//        $response = $client->request('GET', 'http://webservice.recruit.co.jp/hotpepper/large_area/v1/?key=6a2f08f9864336a2&format=json&keyword=大阪');

        $result = json_decode($response->getBody());
//        dd($result->results);
//        dd($result->results->shop[0]);
//        dd($result->results->shop[0]->lng);

        dd($result->results->shop[0]);

        $data = [];
        foreach ($result->results->shop as $shop) {
            $data[] = $shop->id;
        }


        foreach ($data as $id) {
            echo '\'';
            echo $id;
            echo '\'';
            echo ',';
        }
        return;
    }
}
