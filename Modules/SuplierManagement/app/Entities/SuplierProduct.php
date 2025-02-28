<?php

namespace Modules\SuplierManagement\app\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuplierProduct extends Model
{
    use HasFactory;

    protected $table = 'suplier_products';
    protected $primary_key = 'id';

    protected $fillable = [
        'suppliers_id',
        'products_id',
        'quntity',
        'supplier_price',
        
    ];
}
