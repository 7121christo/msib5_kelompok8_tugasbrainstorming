<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = new Course();
        $course->kategori_id = '1';
        $course->kodeCourse = 'PHPDSR';
        $course->namaCourse = 'PHP Dasar';
        $course->save();

        $course = new Course();
        $course->kategori_id = '2';
        $course->kodeCourse = 'HTMLDSR';
        $course->namaCourse = 'HTML Dasar';
        $course->save();

        $course = new Course();
        $course->kategori_id = '3';
        $course->kodeCourse = 'JSDSR';
        $course->namaCourse = 'JavaScript Dasar';
        $course->save();

        $course = new Course();
        $course->kategori_id = '4';
        $course->kodeCourse = 'CSSDSR';
        $course->namaCourse = 'CSS Dasar';
        $course->save();
    }
}
