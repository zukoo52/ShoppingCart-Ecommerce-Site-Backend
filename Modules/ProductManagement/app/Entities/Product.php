<?php

namespace Modules\ProductManagement\app\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\CategoryManagement\app\Entities\Category;


class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    protected $primar_key = 'id';

    protected $fillable = [
         'product_code',
         'product_name',
         'product_price',
         'product_stock_level',
         'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class , 'category_id');
    }

}
