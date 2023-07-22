<?php
namespace App\Domain\Services;

use Illuminate\Http\Request;

use App\Domain\IServices\IPurchasesHistoryServices;
use App\DTO\PurchasesHistory\CreatePurchasesHistoryDTO;
use App\DTO\PurchasesHistory\ShowPurchasesHistoryDTO;
use App\DTO\PurchasesHistory\ShowByUserPurchasesHistoryDTO;

class PurchasesHistoryServices implements IPurchasesHistoryServices
{
    public function CreateAction(CreatePurchasesHistoryDTO $context)
    {

    }

    public function ShowAction(ShowPurchasesHistoryDTO $context)
    {

    }

    public function ShowByUserAction(ShowByUserPurchasesHistoryDTO $context)
    {

    }

    public function AllAction()
    {

    }
}