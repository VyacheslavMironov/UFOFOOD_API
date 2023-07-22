<?php
namespace App\DTO\PushUserSession;

final class CreatePushUserSessionDTO
{
    public int $UserId;
    public bool $Value;

    public function __construct(int $UserId, bool $Value)
    {
        $this->UserId = $UserId;
        $this->Value = $Value;
    }
}
