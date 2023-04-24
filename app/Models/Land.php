<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{   
    protected $table ='land';
    protected $fillable = ['adresse', 'type', 'surface'];
    public function images()
    {
        return $this->hasMany(Land_Image::class);
    }

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorite_lands');
    }

}