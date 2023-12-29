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
            'nama' => 'amar',
            'email' => 'amar@gmail.com',
            'no_telpon' => '089694273720',
            'alamat' => 'DIY',
            'password' => bcrypt('amar123')
        ]);
        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'no_telpon' => '089694273720',
            'alamat' => 'DIY',
            'password' => bcrypt('admin123'),
            'is_admin' => true
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
                'isi' => '                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora distinctio, culpa excepturi quo eligendi deleniti fugiat, suscipit sunt mollitia sequi aliquam doloribus dolore aperiam optio ullam minus, earum ad nam?',
                'status' => 1
            ]
        );
    }
}
