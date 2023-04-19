<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table ='houses';
    protected $fillable = ['adresse', 'type', 'surface', 'nbpiece'];
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    

    public function favoritedBy()
    {
        return $this->morphToMany(User::class, 'favorite', 'favorite_houses', 'unit_id')
                    ->withPivot('type')
                    ->wherePivot('type', 'house');
    }
    
}
