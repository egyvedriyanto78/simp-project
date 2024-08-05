<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['kategori' => 'Matematika'],
            ['kategori' => 'Fisika'],
            ['kategori' => 'Kimia'],
            ['kategori' => 'Biologi'],
            ['kategori' => 'Bahasa_Indonesia'],
            ['kategori' => 'Bahasa_Inggris'],
            ['kategori' => 'Sejarah_Indonesia'],
            ['kategori' => 'Sejarah_Dunia'],
            ['kategori' => 'Geografi'],
            ['kategori' => 'Ekonomi'],
            ['kategori' => 'Sosiologi'],
            ['kategori' => 'Antropologi'],
            ['kategori' => 'Pendidikan_Kewarganegaraan'],
            ['kategori' => 'Teknologi_Informasi'],
            ['kategori' => 'Pendidikan_Jasmani'],
            ['kategori' => 'Pendidikan_Agama'],
            ['kategori' => 'Seni'],
            ['kategori' => 'Bahasa_Asing'],
            ['kategori' => 'Akuntansi'],
            ['kategori' => 'Administrasi_Bisnis'],
            ['kategori' => 'Novel_Fiksi'],
            ['kategori' => 'Novel_NonFiksi'],
            ['kategori' => 'Biografi'],
            ['kategori' => 'Otobiografi'],
            ['kategori' => 'Pengembangan_Diri'],
            ['kategori' => 'Motivasi'],
            ['kategori' => 'Kepemimpinan'],
            ['kategori' => 'Manajemen'],
            ['kategori' => 'Bisnis_Keuangan'],
            ['kategori' => 'Kesehatan_Kebugaran'],
            ['kategori' => 'Kuliner_Memasak'],
            ['kategori' => 'Parenting'],
            ['kategori' => 'Psikologi'],
            ['kategori' => 'Filosofi'],
            ['kategori' => 'Sains_Populer'],
            ['kategori' => 'Teknologi_Inovasi'],
            ['kategori' => 'Fotografi'],
            ['kategori' => 'Arsitektur_Desain'],
            ['kategori' => 'Lingkungan_Ekologi'],
            ['kategori' => 'Travel_Pariwisata'],
            ['kategori' => 'Hobi_Kerajinan'],
            ['kategori' => 'Sejarah_Lokal'],
            ['kategori' => 'Buku_AnakAnak'],
            ['kategori' => 'Komik_Manga'],
            ['kategori' => 'Puisi'],
            ['kategori' => 'Drama_Teater'],
            ['kategori' => 'Kriminal_Detektif'],
            ['kategori' => 'Romansa'],
            ['kategori' => 'Fantasi_FiksiIlmiah'],
            ['kategori' => 'Horor_Thriller'],
        ];

        DB::table('categories')->insert($categories);
    }
}
