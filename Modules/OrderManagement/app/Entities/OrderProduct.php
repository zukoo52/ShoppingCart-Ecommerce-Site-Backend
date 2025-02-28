<?php

namespace Modules\OrderManagement\app\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'order_products';
    protected $primary_key = 'id';

    protected $fillable = [
        'quntity',
        'product_id',
        'order_id',
    ];
}
