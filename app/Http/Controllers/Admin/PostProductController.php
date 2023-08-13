<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Services\MenuServices;
use App\DTO\Menu\CreateMenuDTO;
use App\DTO\Menu\DeleteMenuDTO;
use App\DTO\Menu\UpdateMenuDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostProductController extends Controller
{
    public function create(Request $request, MenuServices $service)
    {
        $service->actionCreate(
            new CreateMenuDTO(
                $request->CategoryId,
                $request->Title,
                $request->Description,
                $request->file("Image")
                    ->store('uploads', 'public'),
                $request->Price,
                null
            )
        );
        return back();
    }

    public function update(Request $request, MenuServices $service)
    {
        $service->actionUpdate(
            new UpdateMenuDTO(
                $request->Id,
                $request->CategoryId,
                $request->Title,
                $request->Description,
                $request->Image ? $request->file("Image")->store('uploads', 'public') : $request->ImageOld,
                $request->Price,
                null
            )
        );
        return back();
    }

    public function delete(Request $request, MenuServices $service)
    {
        $service->actionDelete(
            new DeleteMenuDTO($request->Id)
        );
        return back();
    }
}
