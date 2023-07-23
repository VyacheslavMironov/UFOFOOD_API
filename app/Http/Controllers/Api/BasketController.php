<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Services\BasketServices;
use App\DTO\Basket\CreateBasketDTO;
use App\DTO\Basket\DeleteBasketDTO;
use App\DTO\Basket\CountUpdateBasketDTO;

class BasketController extends Controller
{
    public function create(Request $request, BasketServices $service)
    {
        return $service->actionCreate(
            new CreateBasketDTO(
                $request->UserId,
                $request->MenuId,
                $request->Price,
                $request->Count
            )
        );
    }

    public function all(Request $request, BasketServices $service)
    {
        return response()->json([
            "response" => $service->actionAll()
        ]);
    }

    public function delete(int $basket_id, BasketServices $service)
    {
        return response()->json([
            "response" => $service->actionDelete(
                new DeleteBasketDTO($basket_id)
            )
        ]);
    }

    public function countUpdate(int $basket_id, int $count, BasketServices $service)
    {
        return response()->json([
            "response" => $service->actionCountUpdate(
                new CountUpdateBasketDTO(
                    $basket_id,
                    $count
                )
            )
        ]);
    }
}
