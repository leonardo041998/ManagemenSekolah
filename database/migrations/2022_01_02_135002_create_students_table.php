<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Pria', 'Wanita'])->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'])->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->enum('pkrj_ibu', ['PNS', 'TNI/Polri', 'Pegawai Swasta', 'Wiraswasta', 'Pensiunan', 'Lainnya'])->nullable();
            $table->enum('pkrj_ayah', ['PNS', 'TNI/Polri', 'Pegawai Swasta', 'Wiraswasta', 'Pensiunan', 'Lainnya'])->nullable();
            $table->string('nama_wali')->nullable();
            $table->text('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('no_telp')->nullable();
            $table->enum('kelas', ['X', 'XI', 'XII'])->nullable();
            $table->enum('jurusan', ['IPA 1', 'IPA 2', 'IPA 3', 'IPA 4', 'IPS 1', 'IPS 2', 'IPS 3', 'IPS 4'])->nullable();
            $table->enum('status_siswa', ['Aktif', 'Tidak Aktif', 'Lulus', 'Tidak Lulus'])->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
