<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded=['id', 'created_at', 'updated_at'];

    // Relacion 1 a N 
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    // Relacion 1 a N Inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    // Relacion 1 a N Inversa
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    // Relacion N a N 
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    // Relacion 1 a N Polimorfica
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
