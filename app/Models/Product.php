<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'preco'];

    public function products()
    {
        return $this->hasMany(Categoria::class);
    }
}
