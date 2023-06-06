<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address'
    ];

    public function homeType()
    {
        return $this->belongsTo(HomeType::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class)->withTimestamps();
    }

    public function community()
    {
        return $this->belongsTo(Community::class);
    }
}
