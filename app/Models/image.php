<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table ='images';
    protected $fillable = ['house_id', 'path'];
    public function house()
    {
        return $this->belongsTo(House::class);
    }

}