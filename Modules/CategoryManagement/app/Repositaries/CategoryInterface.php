<?php

namespace Modules\CategoryManagement\app\Repositaries;



interface CategoryInterface
{
    public function index();
    public function store($data);
    public function update($data, $id);
    public function delete($id);
}
