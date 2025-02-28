<?php

namespace Modules\OrderManagement\app\Repositaries;



interface OrderInterface
{
    public function index();
    public function store($data);
    public function update($data, $id);
    public function delete($id);
}
