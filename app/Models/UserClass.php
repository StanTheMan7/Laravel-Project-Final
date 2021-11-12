<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClass extends Model
{
    use HasFactory;
    protected $table = 'user_classes';
    protected $filable = [
        'user_id',
        'classe_id'
    ];
}
