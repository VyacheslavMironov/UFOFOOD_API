<?php
namespace App\DTO\PurchasesHistory;

final class CreatePurchasesHistoryDTO
{
    public int $UserId;
    public string $OrderCode;
    public float $Price;
    public string $Values;
    public string $SetDate;
    public string $SetTime;

    public function __construct(int $UserId, string $OrderCode, float $Price, 
                                string $Values, string $SetDate, string $SetTime)
    {
        $this->UserId = $UserId;
        $this->OrderCode = $OrderCode;
        $this->Price = $Price;
        $this->Values = $Values;
        $this->SetDate = $SetDate;
        $this->SetTime = $SetTime;
    }
}
