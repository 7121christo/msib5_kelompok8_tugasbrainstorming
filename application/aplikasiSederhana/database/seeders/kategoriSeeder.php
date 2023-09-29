<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = new Kategori();
        $kategori->kodeKategori = 'ktrPHP';
        $kategori->namaKategori = 'PHP';
        $kategori->deskripsi = 'Bab ini membahas tentang programming PHP';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->kodeKategori = 'ktrHTML';
        $kategori->namaKategori = 'HTML';
        $kategori->deskripsi = 'Bab ini membahas tentang programming HTML';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->kodeKategori = 'ktrJS';
        $kategori->namaKategori = 'JavaScript';
        $kategori->deskripsi = 'Bab ini membahas tentang programming JavaScript';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->kodeKategori = 'ktrCSS';
        $kategori->namaKategori = 'CSS';
        $kategori->deskripsi = 'Bab ini membahas tentang programming CSS';
        $kategori->save();
    }
}
