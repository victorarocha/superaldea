<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file_path',
        'start_date',
        'end_date',


    ];

    public function contractType() {
        return $this->belongsTo(ContractType::class);
    }
}
