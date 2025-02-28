<?php

namespace Modules\ReviewManagement\app\Repositaries;

use Modules\ReviewManagement\app\Entities\reviews;

class ReviewImplementations implements ReviewInterface
{

    // get all Review  data
    public function index()
    {
         // Eager load
         $reviews = reviews::with('user')
          ->get();
        return $reviews;
    }

    // store Review
    public function store($data)
    {
        $reviews = new reviews();
        $reviews->reviews = $data['reviews'];
        $reviews->ratings = $data['ratings'];
        $reviews->users_id = $data['users_id'];

        $reviews->save();
        return  $reviews;
    }

    // update Reviews
    public function  update($data, $id)
    {

        $id->update($data);

        return $data;
    }

    // delete Reviews
    public function  delete($id)
    {
        $id->delete();
    }
}
