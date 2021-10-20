<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    
    protected $fillable = [
        'name',
        'icon1',
        'icon2',
        'icon3',
        'icon4',
        'link1',
        'link2',
        'link3',
        'link4'
    ];
}
