<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseTag extends Model
{
    use HasFactory;
    protected $table ="classe_tag"; 
    
    protected $fillable = [
        'classe_id',
        'tag_id'
    ];
}
