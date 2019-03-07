<?php


namespace App\Services;


use App\Model\Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuestSessionService
{
    public function myGuestSessions(User $user, string $relationName)
    {
        $guestSessions = collect([]);
        $mySessions = $user->{$relationName};

        foreach ($mySessions as $session) {
            $mySessionUserInfo = $session->users()->where('id', $user->id)->first();
            $myPlusMinus = (isset($mySessionUserInfo->pivot->plus_minus))? $mySessionUserInfo->pivot->plus_minus: 0;

            $myBudgetEstimate = 0; // 自身の支払い予定金額
            $myBudgetActual = 0; // 自身の支払い決定金額

//            Log::debug(print_r($mySessionUserInfo->pivot->join_status, true));

            $managerCost = 0;
            // 予定金額の方
            if ($session->budget != null && $session->budget > 0 && $mySessionUserInfo->pivot->join_status == 'allow') {
                $allowUserCount = $session->users()->wherePivot('join_status', 'allow')->count();
//                Log::debug('------');
//                Log::debug('sessionId'. $session->id);
//                Log::debug('allowUser' . $allowUserCount);
                $sum = $session->budget * $allowUserCount;
                foreach ($session->users()->wherePivot('join_status', 'allow')->get() as $allowUser) {
                    $sum -= isset($allowUser->pivot->plus_minus)? $allowUser->pivot->plus_minus : 0;
                }
                $managerCost = ((int)($sum / $session->unit_rounding_budget) / ($allowUserCount + 1)) * $session->unit_rounding_budget;
//                Log::debug('managerconst'. $managerCost);
                $myBudgetEstimate = $managerCost + $myPlusMinus;
            }

            $managerCost = 0;
            // 支払い決定金額の方
            if ($session->actual != null && $session->actual > 0 && $mySessionUserInfo->pivot->join_status == 'allow') {

                $allowUserCount = $session->users()->wherePivot('join_status', 'allow')->count();
                $sum = $session->actual * $allowUserCount;
                foreach ($session->users()->wherePivot('join_status', 'allow')->get() as $allowUser) {
                    $sum -= isset($allowUser->pivot->plus_minus)? $allowUser->pivot->plus_minus : 0;
                }
                $managerCost = ((int)($sum / $session->unit_rounding_actual) / ($allowUserCount + 1)) * $session->unit_rounding_actual;
//                Log::debug('managerconst'. $managerCost);

                $myBudgetActual = $managerCost + $myPlusMinus;
            }
//            Log::debug('myestimate');
//            Log::debug($myBudgetEstimate);
//            Log::debug('myactual');
//            Log::debug($myBudgetActual);
            $session->my_budget_estimate = $myBudgetEstimate;
            $session->my_budget_actual = $myBudgetActual;

            $guestSessions->push($session);
        }

        return $guestSessions;
    }

    public function myGuestSession(User $user, Session $session)
    {
        $guestSessions = collect([]);
        $mySessionUserInfo = $session->users()->where('id', $user->id)->first();
        $myPlusMinus = (isset($mySessionUserInfo->pivot->plus_minus))? $mySessionUserInfo->pivot->plus_minus: 0;

        $myBudgetEstimate = 0; // 自身の支払い予定金額
        $myBudgetActual = 0; // 自身の支払い決定金額

//            Log::debug(print_r($mySessionUserInfo->pivot->join_status, true));

        $managerCost = 0;
        // 予定金額の方
        if ($session->budget != null && $session->budget > 0 && $mySessionUserInfo->pivot->join_status == 'allow') {
            $allowUserCount = $session->users()->wherePivot('join_status', 'allow')->count();
//                Log::debug('------');
//                Log::debug('sessionId'. $session->id);
//                Log::debug('allowUser' . $allowUserCount);
            $sum = $session->budget * $allowUserCount;
            foreach ($session->users()->wherePivot('join_status', 'allow')->get() as $allowUser) {
                $sum -= isset($allowUser->pivot->plus_minus)? $allowUser->pivot->plus_minus : 0;
            }
            $managerCost = ((int)($sum / $session->unit_rounding_budget) / ($allowUserCount + 1)) * $session->unit_rounding_budget;
//                Log::debug('managerconst'. $managerCost);
            $myBudgetEstimate = $managerCost + $myPlusMinus;
        }

        $managerCost = 0;
        // 支払い決定金額の方
        if ($session->actual != null && $session->actual > 0 && $mySessionUserInfo->pivot->join_status == 'allow') {

            $allowUserCount = $session->users()->wherePivot('join_status', 'allow')->count();
            $sum = $session->actual * $allowUserCount;
            foreach ($session->users()->wherePivot('join_status', 'allow')->get() as $allowUser) {
                $sum -= isset($allowUser->pivot->plus_minus)? $allowUser->pivot->plus_minus : 0;
            }
            $managerCost = ((int)($sum / $session->unit_rounding_actual) / ($allowUserCount + 1)) * $session->unit_rounding_actual;
//                Log::debug('managerconst'. $managerCost);

            $myBudgetActual = $managerCost + $myPlusMinus;
        }
//            Log::debug('myestimate');
//            Log::debug($myBudgetEstimate);
//            Log::debug('myactual');
//            Log::debug($myBudgetActual);
        $session->my_budget_estimate = $myBudgetEstimate;
        $session->my_budget_actual = $myBudgetActual;

        return $session;
    }
}