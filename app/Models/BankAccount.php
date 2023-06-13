<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_number',
        'name',
        'reference',
        'validation_message'
    ];

    public function bank() {
        return $this->belongsTo(Bank::class);
    }

    public function person() {
        return $this->belongsTo(Person::class);
    }
}
