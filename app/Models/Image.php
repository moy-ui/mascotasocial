<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    //realcion 1 a mucho -----> one to many
    public function comments(){
        return $this->hasMany(Comment::class);
    }


    //relacion one to many 
    public function likes(){
        return $this->hasMany(Like::class);
    }

    //relacion many to one // muchos a uno
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
