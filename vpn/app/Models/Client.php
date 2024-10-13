<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Client extends Model
{
    use HasFactory, AsSource, Filterable;
    protected $fillable = [
        'server_id',
        'name',
        'client_id',
        'address',
        'expired_at',
        'enabled',
    ];
    protected $allowedSorts = [
        'id',
        'ip',
        'expired_at',
        'created_at',
    ];
    protected $casts = [
        'expired_at' => 'datetime',
    ];
    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
