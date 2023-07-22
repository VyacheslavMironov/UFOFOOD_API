<?php
namespace App\DTO\PushUserSession;

final class UpdatePushUserSessionDTO
{
    public int $Id;
    public int $UserId;
    public bool $Value;

    public function __construct(int $Id, int $UserId, bool $Value)
    {
        $this->Id = $Id;
        $this->UserId = $UserId;
        $this->Value = $Value;
    }
}
