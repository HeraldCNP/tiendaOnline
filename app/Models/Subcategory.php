<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded=['id', 'created_at', 'updated_at'];

    // Relacion 1 a N
    public function products(){
        return $this->hasMany(Product::class);
    }

    // Relacion 1 a N Inversa
    public function category(){
        return $this->BelongsTo(Category::class);
    }
}
