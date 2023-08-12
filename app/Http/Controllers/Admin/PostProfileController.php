<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Services\UserRoleService;
use App\Domain\Services\UserServices;
use App\DTO\User\CreateUserDTO;
use App\DTO\UserRole\CreateUserRoleDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostProfileController extends Controller
{
    public function create(Request $request, UserServices $userService, UserRoleService $userRoleService)
    {
        // Создание профиля
        $user = $userService->CreateAction(
            new CreateUserDTO(
                $request->FirstName ? $request->FirstName : null,
                $request->LastName ? $request->LastName : null,
                $request->Phone,
                null
            )
        );
        if ($user->id)
        {
            // Создание роли 
            $userRoleService->CreateAction(
                new CreateUserRoleDTO(
                    $request->Role,
                    $user->id
                )
            );

            return redirect()->route('profiles.index');
        }
    }
}
