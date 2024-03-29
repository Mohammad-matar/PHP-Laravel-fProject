<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable  = [
        'username',
        'email',
        'location',
        'phone_number',
        'text'
    ];
    public function Product(){
        return $this->belongsToMany(Product::class);
    }
}
