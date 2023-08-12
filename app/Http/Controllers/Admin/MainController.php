<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Services\MenuCategoryServices;
use App\Domain\Services\MenuServices;
use App\Domain\Services\UserServices;
use App\DTO\User\CodeUserDTO;
use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function login(Request $request)
    {
        return view('login', ['form_route' => 'user.login']);
    }


    public function profile(User $user, UserRole $userRole)
    {
        $arr = array();

        foreach ($user->get() as $user)
        {
            $role = $userRole::where("UserId", $user->id)->get();
            array_push(
                $arr,
                [
                    "FirstName" => $user->FirstName, 
                    "LastName" => $user->LastName, 
                    "Phone" => $user->Phone,
                    "Role" => $role[0]->Name
                ]
            );
        }
        return view('profile', [
            'users' => $arr
        ]);
    }

    public function products(MenuServices $service, MenuCategory $category)
    {
        $arr = [];

        foreach ($service->actionAll() as $menu)
        {
            $menuCategory = $category::find($menu->CategoryId);
            array_push($arr, [
                "Title" => $menu->Title,
                "Description" => $menu->Description,
                "Image" => $menu->Image,
                "Category" => $menuCategory->Title,
                "Price" => $menu->Price,
            ]);
        }
        return view('products', [
            "menus" => $arr
        ]);
    }
}
