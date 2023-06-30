<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBin extends Model
{
    use HasFactory;

    protected $table = 'data_bins';

    protected $fillable = [
        'id_tong',
        'no_siri_tong',
        'jenis_tong',
    ];
}
