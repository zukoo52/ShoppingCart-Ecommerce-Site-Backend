<?php

namespace Modules\ReviewManagement\app\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\UserManagement\app\Entities\User;

class reviews extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $primary_key = 'id';

    protected $fillable = [
        'reviews',
        'ratings',
        'users_id',

    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}

