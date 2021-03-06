<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    // Relacion 1 a N
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    // relacion N a N
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    public function products (){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
    // URls Amigables
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
