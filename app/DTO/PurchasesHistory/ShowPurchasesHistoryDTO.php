<?php
namespace App\DTO\PurchasesHistory;

final class ShowPurchasesHistoryDTO
{
    public string $OrderCode;

    public function __construct(string $OrderCode)
    {
        $this->OrderCode = $OrderCode;
    }
}