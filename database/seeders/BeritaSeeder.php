<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'judul_berita' => 'Workshop KSI',
            'isi_berita' => 'Program Studi Sarjana Terapan Keamanan Sistem Informasi Politeknik Negeri Bengkalis (Polbeng) menyelenggarakan Workshop Penyusunan Dokumen Project Based Learning melalui teaching factory/ industry.'
        ]);
    }
}