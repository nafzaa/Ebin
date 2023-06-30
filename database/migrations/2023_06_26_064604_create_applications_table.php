<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('Skim')->nullable();
            $table->string('jenis_premis')->nullable();
            $table->string('kategori_permohonan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('nama_jalan')->nullable();
            $table->string('nama_taman')->nullable();
            $table->string('poskode')->nullable();
            $table->string('negeri')->nullable();
            $table->string('nama_penerima')->nullable();
            $table->string('no_kp_penerima')->nullable();
            $table->string('status_penerima')->nullable();
            $table->string('no_tel_penerima')->nullable();
            $table->string('email_penerima')->nullable();
            $table->string('warganegara_penerima')->nullable();
            $table->string('jenis_tong')->nullable();
            $table->string('jumlah_tong')->nullable();
            $table->string('no_siri_tongB')->nullable();
            $table->string('no_siri_tongL')->nullable();
            $table->string('Kategori_penerima')->nullable();
            $table->string('catatan')->nullable();
            $table->integer('terma_syarat')->nullable();
            $table->string('nama_pekerja')->nullable();
            $table->string('no_pekerja')->nullable();
            $table->string('no_lori')->nullable();
            $table->integer('status_permohonan')->nullable()->default(0);
            $table->integer('status_penerimaan')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
