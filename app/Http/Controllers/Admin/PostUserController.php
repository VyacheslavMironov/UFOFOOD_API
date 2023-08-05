<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Services\UserServices;
use App\DTO\User\CodeUserDTO;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\LoginCodeRequest;
use App\Http\Requests\LoginRequest;

class PostUserController extends Controller
{
    public function newCode(LoginRequest $request, UserServices $service)
    {
        $request->validated();
        try {
            return view('login', [
                'phone'=> $request['phone'],
                'status' => $service->CodeAction(
                    new CodeUserDTO(
                        $request['phone'],
                        null
                    )
                ),
                'form_route' => 'user.code'
            ])
                ->with('success', 'Код для входа успешно отправлен, на номер: '.$request['phone']);
        }
        catch (\ErrorException $e)
        {
            return back()->withInput()->with('error', $e->getMessage());
        }
    }
    public function login(LoginCodeRequest $request, UserServices $services)
    {
        $request->validated();
        return [];
    }
}
