<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Hasmany;

class Machine extends Model
{
    use HasFactory;
    protected $fillable= [
        'machine',
        'code',
        'detail',
    ];

    // public function products(): HasMany
    // {
    //     return $this->hasMany(Product::class);
    // }
}
