<?php
namespace App\Domain\IRepository;

use App\DTO\MenuCategory\CreateMenuCategoryDTO;
use App\DTO\MenuCategory\DeleteMenuCategoryDTO;

interface IMenuCategoryRepository
{
    public function Create(CreateMenuCategoryDTO $context);
    public function Delete(DeleteMenuCategoryDTO $context);
    public function All();
}