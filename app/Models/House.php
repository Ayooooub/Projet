<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table ='houses';
    protected $fillable = ['adresse', 'type', 'surface', 'image','nbpiece'];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
