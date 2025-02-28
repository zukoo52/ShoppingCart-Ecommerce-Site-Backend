<?php

namespace Modules\UserManagement\app\Repositaries;



interface UserInterface
{
    public function index();
    public function store($data);
    public function update($data, $id);
    public function delete($id);
}