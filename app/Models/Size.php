<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable=['name', 'product_id'];

    // Relacion 1 a N Inversa
    public function product(){
        return $this->belongsTo(Product::class);
    }

    // Relacion N a N
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
