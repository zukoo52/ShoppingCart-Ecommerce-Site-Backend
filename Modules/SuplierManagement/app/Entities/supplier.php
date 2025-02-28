<?php

namespace Modules\SuplierManagement\app\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primary_key = 'id';


    protected $fillable = [
        'supplier_name',
        'supplier_email',
        'supplier_address',
        'supplier_phone_number',
    ];
}
