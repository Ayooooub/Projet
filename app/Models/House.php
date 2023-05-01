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
    public function user()
{
    return $this->belongsTo(User::class);
}

public function favoritedBy()
{
    return $this->belongsToMany(User::class, 'favorite_houses');
}
public function messages()
{
    return $this->hasMany(Message::class);
}
}