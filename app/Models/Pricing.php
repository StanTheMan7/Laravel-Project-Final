<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $table = 'pricings';
    
    protected $fillable = [ 
        'package',
        'price',
        'month',
        'gift1',
        'gift2',
        'gift3',
        'gift4',
        'button'
    ];
}
