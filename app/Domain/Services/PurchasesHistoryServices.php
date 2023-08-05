<?php
namespace App\Domain\Services;

use Illuminate\Http\Request;

use App\Domain\IServices\IPurchasesHistoryServices;
use App\DTO\PurchasesHistory\CreatePurchasesHistoryDTO;
use App\DTO\PurchasesHistory\ShowPurchasesHistoryDTO;
use App\DTO\PurchasesHistory\ShowByUserPurchasesHistoryDTO;
use App\Repository\PurchasesHistoryRepository;
use App\Domain\Services\UserServices;

class PurchasesHistoryServices implements IPurchasesHistoryServices
{
    private PurchasesHistoryRepository $repository;
    private UserServices $randomString;
    public function __construct()
    {
        $this->repository = new PurchasesHistoryRepository();
        $this->randomString = new UserServices();
    }

    public function CreateAction(CreatePurchasesHistoryDTO $context)
    {
        $context->OrderCode = $this->randomString->generateRandomString($length=6, $characters='12345678900987654321');
        return $this->repository->Create($context);
    }

    public function ShowAction(ShowPurchasesHistoryDTO $context)
    {
        return $this->repository->Show($context);
    }

    public function ShowByUserAction(ShowByUserPurchasesHistoryDTO $context)
    {
        return $this->repository->ShowByUser($context);
    }

    public function AllAction()
    {
        return $this->repository->All();
    }
}