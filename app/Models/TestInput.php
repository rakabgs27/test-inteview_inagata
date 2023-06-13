<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestInput extends Model
{
    use HasFactory;

    protected $fillable = [
        'input_karakter',
    ];
}
