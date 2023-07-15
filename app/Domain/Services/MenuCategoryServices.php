<?php
namespace App\Domain\Services;

use App\DTO\MenuCategory\CreateMenuCategoryDTO;
use App\Domain\IServices\IMenuCategoryServices;
use App\Repository\MenuCategoryRepository;

class MenuCategoryServices implements IMenuCategoryServices
{
    public MenuCategoryRepository $repository;
    public function __construct()
    {
        $this->repository = new MenuCategoryRepository();    
    }

    public function actionCreate(CreateMenuCategoryDTO $context)
    {
        return $this->repository->Create($context);
    }
}