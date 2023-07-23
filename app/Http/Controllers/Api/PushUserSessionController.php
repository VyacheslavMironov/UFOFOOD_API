<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Services\PushUserSessionServices;
use App\DTO\PushUserSession\CreatePushUserSessionDTO;
use App\DTO\PushUserSession\ShowPushUserSessionDTO;
use App\DTO\PushUserSession\UpdatePushUserSessionDTO;

class PushUserSessionController extends Controller
{
    public function create(Request $request, PushUserSessionServices $service)
    {
        return response()->json([
            "response" => $service->CreateAction(
                new CreatePushUserSessionDTO(
                    $request->UserId,
                    $request->Value
                )
            )
        ]);
    }

    public function show(int $user_id, PushUserSessionServices $service)
    {
        return response()->json([
            "response" => $service->ShowAction(
                new ShowPushUserSessionDTO($user_id)
            )
        ]);
    }

    public function update(Request $request, PushUserSessionServices $service)
    {
        return response()->json([
            "response" => $service->UpdateAction(
                new UpdatePushUserSessionDTO(
                    $request->Id,
                    $request->UserId,
                    $request->Value
                )
            )
        ]);
    }
}
