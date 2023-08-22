<?php
namespace App\Repository;

use App\Domain\IRepository\IPurchasesHistoryRepository;
use App\DTO\PurchasesHistory\CreatePurchasesHistoryDTO;
use App\DTO\PurchasesHistory\ShowPurchasesHistoryDTO;
use App\DTO\PurchasesHistory\ShowByUserPurchasesHistoryDTO;
use App\Models\PurchasesHistory;

class PurchasesHistoryRepository implements IPurchasesHistoryRepository
{
    public function Create(CreatePurchasesHistoryDTO $context)
    {
        $model = new PurchasesHistory();
        $model->UserId = $context->UserId;
        $model->OrderCode = $context->OrderCode;
        $model->Price = $context->Price;
        $model->Values = $context->Values;
        $model->SetDate = $context->SetDate;
        $model->SetTime = $context->SetTime;
        $model->save();
        return $model;
    }

    public function Show(ShowPurchasesHistoryDTO $context)
    {
        return PurchasesHistory::where('OrderCode', $context->OrderCode)
            ->latest()
            ->get();

    }

    public function ShowByUser(ShowByUserPurchasesHistoryDTO $context)
    {
        return PurchasesHistory::where('UserId', $context->UserId)
            ->latest()
            ->get();
    }

    public function All()
    {
        return PurchasesHistory::latest()->get();
    }
}