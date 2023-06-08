<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hc_id',

    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
