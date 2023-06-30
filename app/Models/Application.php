<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'skim',
        'jenis_premis',
        'kategori_permohonan',
        'lokasi',
        'nama_jalan',
        'nama_taman',
        'poskode',
        'negeri',
        'nama_penerima',
        'no_kp_penerima',
        'status_penerima',
        'no_tel_penerima',
        'email_penerima',
        'warganegara_penerima',
        'jenis_tong',
        'jumlah_tong',
        'no_siri_tongB',
        'no_siri_tongL',
        'Kategori_penerima',
        'catatan',
        'terma_syarat',
        'nama_pekerja',
        'no_pekerja',
        'no_lori',
    ];
}
