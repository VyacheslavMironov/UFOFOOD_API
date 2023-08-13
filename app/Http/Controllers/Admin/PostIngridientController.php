<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Services\IngridientServices;
use App\DTO\Ingridient\CreateIngridientDTO;
use App\DTO\Ingridient\DeleteIngridientDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostIngridientController extends Controller
{
    public function create(Request $request, IngridientServices $service)
    {
        $service->actionCreate(
            new CreateIngridientDTO(
                $request->CategoryId,
                $request->Title
            )
        );
        return back();
    }

    public function delete(Request $request, IngridientServices $service)
    {
        $service->actionDelete(
            new DeleteIngridientDTO(
                $request->Id
            )
        );
        return back();
    }
}
