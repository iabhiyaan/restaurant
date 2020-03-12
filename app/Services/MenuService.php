<?php
namespace App\Services;

use App\Models\Menu;

class MenuService
{
    public function getMenuWithCategory(array $restroIds)
    {
        return Menu::whereIn('restro_id', $restroIds)->get()->groupBy('category.name');
    }
}
