<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    // Tentukan atribut yang dapat diisi
    protected $fillable = ['item_id', 'quantity'];

    // Relasi dengan Item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
