<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Country extends Model
{
    use HasFactory, AsSource;

    protected $fillable = ['name'];
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function servers()
    {
        return $this->hasMany(Server::class);
    }
}
