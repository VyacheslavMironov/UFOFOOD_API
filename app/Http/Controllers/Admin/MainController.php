<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Services\UserServices;
use App\DTO\User\CodeUserDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function login(Request $request)
    {
        return view('login', ['form_route' => 'user.login']);
    }


}
