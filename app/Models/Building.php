<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    
    protected $table ='buildings';
    protected $fillable = ['adresse', 'type', 'surface','nb_etage'];
    public function images()
    {
        return $this->hasMany(Building_Image::class);
    }

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorite_buildings');
    }

}
