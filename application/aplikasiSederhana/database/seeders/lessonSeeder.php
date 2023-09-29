<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class lessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Lesson = new Lesson();
        $Lesson->course_id = '1';
        $Lesson->judul = 'VARIABLE';
        $Lesson->deskripsi = 'Mempelajari variable di PHP';
        $Lesson->save();

        $Lesson = new Lesson();
        $Lesson->course_id = '2';
        $Lesson->judul = 'ELEMENT';
        $Lesson->deskripsi = 'Mempelajari element di HTML';
        $Lesson->save();

        $Lesson = new Lesson();
        $Lesson->course_id = '3';
        $Lesson->judul = 'ARITHMETIC';
        $Lesson->deskripsi = 'Mempelajari operator arithmetic di JS';
        $Lesson->save();

        $Lesson = new Lesson();
        $Lesson->course_id = '4';
        $Lesson->judul = 'SELECTOR';
        $Lesson->deskripsi = 'Mempelajari operator selector di CSS';
        $Lesson->save();
    }
}
