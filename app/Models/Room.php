<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hc_id',

    ];

    public function home() {
        return $this->belongsTo(Home::class);

    }

    public function doors() {
        return $this->hasMany(Door::class);
    }
}
