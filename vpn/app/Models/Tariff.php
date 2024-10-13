<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Tariff extends Model
{
    use HasFactory, AsSource;
    protected $fillable = [
        'name',
        'description',
        'days',
        'peers',
        'is_demo',
        'next_tariff_id',
        'is_visible',
        'price',
    ];
}
