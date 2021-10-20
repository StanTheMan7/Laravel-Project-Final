<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $table = 'headers';
    
    protected $fillable = [
        'logo',
        'li1',
        'li2',
        'li3',
        'li4',
        'li5'
    ];
}
