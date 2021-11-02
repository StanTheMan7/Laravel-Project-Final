<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    
    protected $table = 'classes';
    
    protected $fillable = [
        'title',
        'name',
        'time',
        'tag_id',
        'categorie_id',
    ]; 

    public function  tags(){
        return $this->belongsToMany(Tag::class, 'classe_tag');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
