<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'phone',
        'hc_id',
    ];

    public function people()
    {
        return $this->belongsToMany(Person::class)->withTimestamps();
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
