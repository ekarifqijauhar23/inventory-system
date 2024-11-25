<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Tentukan atribut yang dapat diisi
    protected $fillable = ['name', 'quantity', 'price'];

    // Relasi dengan Checkout
    public function checkouts()
    {
        return $this->hasMany(Checkout::class);
    }
}
