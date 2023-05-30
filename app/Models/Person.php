<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'photo_path',
        'email',
        'address',
        'phone',
        'birthdate',
        'hc_id',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'birthdate' => 'date'
    ];

    public function communities()
    {

        return $this->belongsToMany(Community::class)->withTimestamps();
    }

    public function homes()
    {
        return $this->belongsToMany(Home::class)->withTimestamps();
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class)->withTimestamps();
    }

}
