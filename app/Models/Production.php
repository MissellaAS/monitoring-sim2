<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    protected $fillable= [
        'company',
        'machine',
        'product',
        'detail',
        'status',
    ];
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

