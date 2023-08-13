<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Services\MenuCategoryServices;
use App\DTO\MenuCategory\CreateMenuCategoryDTO;
use App\DTO\MenuCategory\DeleteMenuCategoryDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function create(Request $request, MenuCategoryServices $service)
    {
        $service->actionCreate(
            new CreateMenuCategoryDTO(
                $request->Title
            )
        );
        return back();
    }

    public function delete(Request $request, MenuCategoryServices $service)
    {
        $service->actionDelete(
            new DeleteMenuCategoryDTO(
                $request->Id
            )
        );
        return back();
    }
}
