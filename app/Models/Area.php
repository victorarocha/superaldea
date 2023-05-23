<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hc_id',

    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);

    }

    public function gates()
    {
        return $this->hasMany(Gate::class);
    }
}
