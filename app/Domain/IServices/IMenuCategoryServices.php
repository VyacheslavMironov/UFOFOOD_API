<?php
namespace App\Domain\IServices;

use App\DTO\MenuCategory\CreateMenuCategoryDTO;


interface IMenuCategoryServices
{
    public function actionCreate(CreateMenuCategoryDTO $context);
}