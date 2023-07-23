<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Domain\Services\PurchasesHistoryServices;
use Illuminate\Http\Request;
use App\DTO\PurchasesHistory\CreatePurchasesHistoryDTO;
use App\DTO\PurchasesHistory\ShowByUserPurchasesHistoryDTO;
use App\DTO\PurchasesHistory\ShowPurchasesHistoryDTO;

class PurchasesHistoryController extends Controller
{
    public function create(Request $request, PurchasesHistoryServices $srvice)
    {
        return response()->json([
            "response" => $srvice->CreateAction(
                new CreatePurchasesHistoryDTO(
                    $request->UserId,
                    $request->OrderCode,
                    $request->Price,
                    $request->Values, // [{'MenuId': 0, 'Count': 0}, ...]
                    date('d.m.Y'),
                    date('H:i')
                )
            )
        ]);
    }

    public function show(string $order_code, PurchasesHistoryServices $srvice)
    {
        return response()->json([
            "response" => $srvice->ShowAction(
                new ShowPurchasesHistoryDTO($order_code)
            )
        ]);
    }

    public function all(int $user_id=null, PurchasesHistoryServices $srvice)
    {
        if ($user_id)
        {
            return response()->json([
                "response" => $srvice->ShowByUserAction(
                    new ShowByUserPurchasesHistoryDTO($user_id)
                )
            ]);
        }
        else
        {
            return response()->json([
                "response" => $srvice->AllAction()
            ]);
        }
    }
}
