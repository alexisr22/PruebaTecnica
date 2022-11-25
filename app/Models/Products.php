<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'upc',
        'current_cost',
        'profit_percentage',
        'enable',
        'brand'
    ];
}
