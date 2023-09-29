<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lesson', function (Blueprint $table) {
            $table->id(); //Primary key
            $table->unsignedBigInteger('course_id'); //Foreign key
            $table->string('judul');
            $table->text('deskripsi');
            $table->text('materi');
            $table->timestamps();

            // Define foreign key to "Course" table
            $table->foreign('course_id')->references('id')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson');
    }
};
