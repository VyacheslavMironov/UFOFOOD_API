<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Services\IngridientServices;
use App\DTO\Ingridient\CreateIngridientDTO;
use App\DTO\Ingridient\DeleteIngridientDTO;

class IngridientController extends Controller
{
    /**
     * Create a newly created resource in storage.
    */
    public function create(Request $request, IngridientServices $service)
    {
        return response()->json([
             $service->actionCreate(
                new CreateIngridientDTO(
                    $request->CategoryId,
                    $request->Title
                )
            )
        ]);
    }

    /**
     * Delete a newly created resource in storage.
    */
    public function delete(int $ingridient_id, IngridientServices $service)
    {
        return response()->json([
            $service->actionDelete(
                new DeleteIngridientDTO(
                    $ingridient_id
                )
            )
        ]);
    }

    /**
     * All a newly created resource in storage.
    */
    public function all(IngridientServices $service)
    {
        return response()->json([
            $service->actionAll()
        ]);
    }
}
