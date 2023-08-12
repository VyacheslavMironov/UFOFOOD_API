<?php
namespace App\Domain\Services;

use App\Domain\IServices\IBasketServices;
use App\Repository\BasketRepository;
use App\DTO\Basket\CreateBasketDTO;
use App\DTO\Basket\DeleteBasketDTO;
use App\DTO\Basket\CountUpdateBasketDTO;

class BasketServices implements IBasketServices
{
    private BasketRepository $repository;
    public function __construct()
    {
        $this->repository = new BasketRepository();
    }

    public function actionCreate(CreateBasketDTO $context)
    {
        $createBasket = $this->repository->Create($context);
        $arr = array();
        array_push($arr, $context->Values);
        if (session()->get("Basket"))
        {
            $sessionBasket = session()->get("UserBasket");
            $sessionBasket["Basket"] = $context->Values;
        }
        session()->put([
            "Basket" => ["Basket" => $context->Values]
        ]);
        return [
            "Basket" => $createBasket,
            "Ingridients" => session()->get("Basket")
        ];
    }

    public function actionAll()
    {
        return $this->repository->All();
    }

    public function actionDelete(DeleteBasketDTO $context)
    {
        return $this->repository->Delete($context);
    }

    public function actionCountUpdate(CountUpdateBasketDTO $context)
    {
        return $this->repository->CountUpdate($context);
    }
}
