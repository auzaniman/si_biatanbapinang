<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = [
        [
          'name' => 'Biatan Bapinang',
          'email' => 'biatanbapinang@gmail.com',
          'username' => 'biatanbapinang',
          'tempat_lahir' => 'Yogya',
          'tanggal_lahir' => '04/25/1998',
          'nik' => '1234567890123457',
          'kk' => '1234567890123458',
          'jabatan_keluarga' => 'Kepala Keluarga',
          'kelamin' => 'Laki-Laki',
          'pendidikan' => 'S1',
          'jurusan' => 'Aplikasi Biatan Bapinang',
          'pekerjaan' => 'Wiraswasta',
          'agama' => 'Islam',
          'perkawinan' => 'Menikah',
          'kewarganegaraan' => 'WNI',
          'status' => 'Warga',
          'provinsi_ktp' => '64',
          'kota_ktp' => '6405',
          'kecamatan_ktp' => '6405110',
          'desa_ktp' => '6405110001',
          'rt_ktp' => 'RT1',
          'rw_ktp' => 'RW2',
          'no_telpon' => '089607575813',
          'password' => bcrypt('biatanbapinang12345')
        ],
      ];

      User::insert($user);
    }
}
