<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building_Image extends Model
{   protected $table ='building_images';
    protected $fillable = ['house_id', 'path'];
    public function house()
    {
        return $this->belongsTo(Building::class);
    }}