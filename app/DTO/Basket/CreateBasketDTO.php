<?php
namespace App\DTO\Basket;

final class CreateBasketDTO
{
    public int $UserId;
    public int $MenuId;
    public float $Price;
    public int $Count;
    public string $Values;

    public function __construct(int $UserId, string $MenuId, float $Price, int $Count, string $Values)
    {
        $this->UserId = $UserId;
        $this->MenuId = $MenuId;
        $this->Price = $Price;
        $this->Count = $Count;
        $this->Values = $Values;
    }
}
