<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nisn',
        'nama_lengkap',
        'tmpt_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'agama',
        'nama_ibu',
        'nama_ayah',
        'pkrj_ibu',
        'pkrj_ayah',
        'nama_wali',
        'alamat',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'no_telp',
        'kelas',
        'jurusan',
        'status_siswa',
        'avatar',
        'user_id'
    ];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('img/default.png');
        }
        return asset('img/' . $this->avatar);
    }
}
