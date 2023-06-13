<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'due_date',
        'description',
        'amount',
        'payment_status'
    ];

    public function contract() {
        return $this->belongsTo(Contract::class);
    }
}
