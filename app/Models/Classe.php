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
        'trainer_id'
    ]; 

    public function  tags(){
        return $this->belongsToMany(Tag::class, 'classe_tag');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }
    
    public function users(){
        return $this->belongsToMany(User::class, 'user_classes');
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
