<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footers';
    
    protected $fillable = [
        'text',
        'icon1',
        'icon2',
        'icon3',
        'email',
        'phone',
        'address',
        'copyright'
    ];
}
