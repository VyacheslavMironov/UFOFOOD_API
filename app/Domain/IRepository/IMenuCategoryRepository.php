<?php
namespace App\Domain\IRepository;

use App\DTO\MenuCategory\CreateMenuCategoryDTO;

interface IMenuCategoryRepository
{
    public function Create(CreateMenuCategoryDTO $context);
}