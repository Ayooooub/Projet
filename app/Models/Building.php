<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    
    protected $table ='buildings';
    protected $fillable = ['adresse', 'type', 'surface','nbpiece'];
    public function images()
    {
        return $this->hasMany(Building_Image::class);
    }

    public function favoritedBy()
    {
        return $this->morphToMany('App\Models\User', 'residential_unit', 'favorite_houses');
    }


   

}
