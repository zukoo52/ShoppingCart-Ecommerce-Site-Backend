<?php

namespace App\Helper;

use Modules\CategoryManagement\app\Entities\Category;

class helper
{
    public static function inserCategories()
    {
        $categories = [
            [
                'category_code' => 'CP',
                'category_name' => 'Celular Products',
            ],
            [
                'category_code' => 'CP1',
                'category_name' => 'Category 1',
            ],
            [
                'category_code' => 'CP2',
                'category_name' => 'Category 2',
            ],
            [
                'category_code' => 'CP3',
                'category_name' => 'Category 3',
            ]
        ];

        Category::insert($categories);
    }
}
