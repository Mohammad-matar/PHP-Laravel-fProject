<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    use HasFactory;
    protected $table = 'bundles';
    protected $fillable = [
        'id',
        'name',
        'price',
        'image'
    ];
}
