<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land_Image extends Model
{   
    protected $table ='land_images';
    protected $fillable = ['land_id', 'path'];
    public function land()
    {
        return $this->belongsTo(Land::class);
    }
}