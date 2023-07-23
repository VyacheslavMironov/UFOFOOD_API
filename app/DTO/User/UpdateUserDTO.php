<?php
namespace App\DTO\User;

final class UpdateUserDTO
{
    public int $Id;
    public string|null $FirstName;
    public string|null $LastName;
    public string|null $Phone;

    public function __construct(int $Id, string|null $FirstName, string|null $LastName, string|null $Phone)
    {
        $this->Id = $Id;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Phone = $Phone;
    }
}
