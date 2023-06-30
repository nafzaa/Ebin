<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negeri extends Model
{
    use HasFactory;

    protected $table = 'negeris';

    protected $fillable = [
        'kod_negeri',
        'nama_negeri',
    ];
}
