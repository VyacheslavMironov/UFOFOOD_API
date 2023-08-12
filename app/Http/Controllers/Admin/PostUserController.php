<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Services\UserServices;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\CodeUserDTO;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\LoginCodeRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

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
                'form_route' => 'user.post.login'
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
        $context = $request->validated();
         $user = $services->AuthAction(
            new AuthUserDTO(
                $context['phone'],
                $context['code'],
            )
        );
         session([
             'UserId' => $user['user']['id'],
             'FirstName' => $user['user']['FirstName'],
             'LastName' => $user['user']['LastName'],
             'Phone' => $user['user']['Phone'],
             'BearerTocken' => $user['bearerTocken']
         ]);
         return redirect()->route('index');
    }

    public function logout(Request $request, UserServices $services)
    {
        session()->remove('UserId');
        session()->remove('FirstName');
        session()->remove('LastName');
        session()->remove('Phone');
        session()->remove('BearerTocken');
        return redirect()->route('user.login');
    }
}
