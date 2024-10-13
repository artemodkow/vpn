<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Server extends Model
{
    use HasFactory, AsSource, Filterable;
    protected $fillable = [
        'name',
        'host',
        'port',
        'username',
        'password',
        'country_id',
        'city_id'
    ];
    protected $allowedSorts = [
        'id',
        'name',
        'host',
        'created_at',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
