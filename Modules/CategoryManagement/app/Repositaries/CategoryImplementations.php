<?php

namespace Modules\CategoryManagement\app\Repositaries;



use Modules\CategoryManagement\app\Entities\Category;

class CategoryImplementations implements CategoryInterface
{

    // get all categories data
    public function index()
    {
        $categories = Category::select('id' , 'category_code' , 'category_name')->get();
        return $categories;
    }

    // store category
    public function store($data)
    {
        $categories = Category::create($data);

        return  $categories;
    }

    // update category
    public function  update($data, $id)
    {

        $id->update($data);

        return $data;
    }

    // delete category
    public function  delete($id)
    {
        $id->delete();
    }
}
