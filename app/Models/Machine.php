<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Machine extends Model
{
    use HasFactory;
    protected $fillable= [
        'machine',
        'code',
        'detail',
    ];
    
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
 }
