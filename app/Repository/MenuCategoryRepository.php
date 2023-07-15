<?php
namespace App\Repository;

use App\DTO\MenuCategory\CreateMenuCategoryDTO;
use App\Domain\IRepository\IMenuCategoryRepository;
use App\Models\MenuCategory;


class MenuCategoryRepository implements IMenuCategoryRepository
{
    public function Create(CreateMenuCategoryDTO $context)
    {
        $model = new MenuCategory();
        $model->Title = $context->Title;
        $model->save();
        return $model;
    }
}