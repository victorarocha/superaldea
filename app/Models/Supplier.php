<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name'
        ];


    public function services()
    {
        return $this->belongsToMany(Service::class)->withTimestamps();
    }

    public function people()
    {
        return $this->belongsToMany(Person::class)->withTimestamps();
    }
}
