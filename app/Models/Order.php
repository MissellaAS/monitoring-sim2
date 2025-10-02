<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "company",
        "product",
        "details",
        "Preparations",
        "On Process",
        "Finish",

    ];
}
