<?php

namespace Modules\OrderManagement\app\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\UserManagement\app\Entities\User;



class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primary_key = 'id';

    protected $fillable = [
        'users_id',
        'status',
        'reference_id'
    ];

    public function user() {
        return $this->belongsTo(User::class , 'users_id');
    }


}
