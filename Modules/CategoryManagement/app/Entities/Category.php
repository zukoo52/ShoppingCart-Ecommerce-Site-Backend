<?php

namespace Modules\CategoryManagement\app\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primary_key = 'id';

    protected $fillable = [
        'category_code',
        'category_name',
    ];
}
