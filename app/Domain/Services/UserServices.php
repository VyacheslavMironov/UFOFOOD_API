<?php
namespace App\Domain\Services;

use Illuminate\Http\Request;
use App\Domain\IServices\IUserServices;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\AuthUserDTO;
use App\DTO\User\ShowByPhoneUserDTO;
use App\DTO\User\UpdateUserDTO;
use App\DTO\User\CodeUserDTO;
use App\Repository\UserRepository;


class UserServices implements IUserServices
{
    public UserRepository $repository;
    public string $characters;
    public function __construct()
    {
        $this->repository = new UserRepository();
        $this->characters = '0123456789abcde0123456789fghijklm0123456789nopq0123456789rstuvwxy0123456789zABCDEFGHIJKLMNOP0123456789QRSTUV0123456789WXYZ';
    }

    private function generateRandomString($length = 6) {
        $charactersLength = strlen($this->characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $this->characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    public function CodeAction(CodeUserDTO $context)
    {
        // Генерим код
        $context->Code = '000000';// $context->Code = $this->generateRandomString();
        if ($this->repository->Code($context))
        {
            return ["code" => "ok"];
        }
        else
        {
            return ["code" => "off"];
        }
    }

    public function CreateAction(CreateUserDTO $context)
    {
        $user = $this->repository->Create($context);
        // Отправка кода по СМС
        return $user;
    }

    public function AuthAction(AuthUserDTO $context)
    {
        return $this->repository->Auth($context);
    }

    public function ShowByPhoneAction(ShowByPhoneUserDTO $context)
    {
        return $this->repository->ShowByPhone($context);
    }

    public function UpdateAction(UpdateUserDTO $context)
    {
        return $this->repository->Update($context);
    }
}