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
        Schema::create('kepala_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50); // VARCHAR(50)
            $table->string('nip', 25); // VARCHAR(25)
            $table->char('tahunajaran', 12); // CHAR(12)
            $table->char('semester', 12); // CHAR(12)
            $table->timestamps();
        });

        Schema::create('wakil_kepala_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->string('namalengkap');
            $table->char('mulai_tahun');
            $table->char('akhir_tahun');
            $table->timestamps();
        });

        Schema::create('ketua_program_studis', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->string('id_kk');
            $table->string('namalengkap');
            $table->char('mulai_tahun');
            $table->char('akhir_tahun');
            $table->timestamps();
        });

        Schema::create('jabatan_lains', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->string('namalengkap');
            $table->char('mulai_tahun');
            $table->char('akhir_tahun');
            $table->timestamps();
        });

        Schema::create('team_pengembangs', function (Blueprint $table) {
            $table->id();
            $table->char('namalengkap');
            $table->char('jeniskelamin');
            $table->char('jabatan');
            $table->text('deskripsi')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_sekolahs');
        Schema::dropIfExists('wakil_kepala_sekolahs');
        Schema::dropIfExists('ketua_program_studis');
        Schema::dropIfExists('jabatan_lains');
        Schema::dropIfExists('team_pengembangs');
    }
};
