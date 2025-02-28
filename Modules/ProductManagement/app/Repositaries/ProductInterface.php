<?php

namespace Modules\ProductManagement\app\Repositaries;


interface ProductInterface{

   public function index();
   public function store($data);
   public function update($data);
   public function delete($id);
}