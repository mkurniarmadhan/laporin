<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\KategoriLaporan;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'no_telpon' => '089694273720',
            'alamat' => 'DIY',
            'password' => bcrypt('admin123'),
            'is_admin' => 'superadmin'
        ]);
        User::create([
            'nama' => 'cesar',
            'email' => 'cesar@gmail.com',
            'no_telpon' => '089694273720',
            'alamat' => 'DIY',
            'password' => bcrypt('12345678'),
            'is_admin' => 'user'
        ]);


        KategoriLaporan::create([
            'kategori' => 'pelayanan'
        ]);
        KategoriLaporan::create([
            'kategori' => 'fasilitas'
        ]);
        KategoriLaporan::create([
            'kategori' => 'pelanggaran'
        ]);
        KategoriLaporan::create([
            'kategori' => 'aspirasi'
        ]);

        Laporan::factory(10)->create();


        Laporan::create(
            [

                'user_id' => 1,
                'kategori_id' => 1,
                'judul' => 'text',
                'isi' => ' aspal jalan?',
                'status' => 1
            ]
        );
    }
}
