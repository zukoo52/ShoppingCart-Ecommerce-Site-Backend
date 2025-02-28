<?php

namespace Modules\UserManagement\app\Repositaries;

use Modules\UserManagement\app\Entities\User;


class UserImplementation implements UserInterface
{

    // get all User data
    public function index()
    {

        $Users = User::select('name', 'email', 'id')->get();
        return  $Users;
    }

    // store User
    public function store($data)
    {
        $password = bcrypt($data['password']);
        $data['password'] = $password;

        $Users = User::create($data);



        return $Users;
    }

    // update User
    public function  update($data, $id)
    {

        $id->update($data);

        return $data;
    }

    // delete User
    public function  delete($id)
    {
        $id->delete();
    }
}
