<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Services\MenuCategoryServices;
use App\Domain\Services\MenuCategoryValidationServices;
use App\DTO\MenuCategory\CreateMenuCategoryDTO;


class MenuCategoryController extends Controller
{
    /**
     * Create a newly created resource in storage.
    */
    public function create(Request $request, MenuCategoryServices $service, MenuCategoryValidationServices $validation)
    {
        $is_valid = $validation->CreateActionValidate($request);
        if (key_exists('errors', $is_valid))
        {
            return $is_valid;
        }
        return $service->actionCreate(
            new CreateMenuCategoryDTO($request->Title)
        );
    }
}
