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
        $Lesson->materi='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima eaque, magni, vitae dicta tempora repellendus soluta ut exercitationem nostrum, accusantium cumque harum ducimus et. Magni quasi corporis aliquid voluptatibus, veniam velit aut, est voluptates maiores eius neque porro voluptatem fuga? Cupiditate, necessitatibus sit. Saepe, amet. Quaerat architecto quo ipsa totam voluptate. Iusto exercitationem a, repellat numquam doloremque ipsa quae, aut repellendus deserunt voluptatibus perferendis nobis sapiente enim. Rem, nulla sit. Tempore fuga corrupti odio! Error dolor adipisci laudantium, aperiam, eligendi aliquid consequatur necessitatibus neque deleniti sunt atque architecto deserunt saepe id, ipsum beatae. Tempore blanditiis officiis quo nihil corrupti excepturi!';
        $Lesson->save();

        $Lesson = new Lesson();
        $Lesson->course_id = '2';
        $Lesson->judul = 'ELEMENT';
        $Lesson->deskripsi = 'Mempelajari element di HTML';
        $Lesson->materi='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima eaque, magni, vitae dicta tempora repellendus soluta ut exercitationem nostrum, accusantium cumque harum ducimus et. Magni quasi corporis aliquid voluptatibus, veniam velit aut, est voluptates maiores eius neque porro voluptatem fuga? Cupiditate, necessitatibus sit. Saepe, amet. Quaerat architecto quo ipsa totam voluptate. Iusto exercitationem a, repellat numquam doloremque ipsa quae, aut repellendus deserunt voluptatibus perferendis nobis sapiente enim. Rem, nulla sit. Tempore fuga corrupti odio! Error dolor adipisci laudantium, aperiam, eligendi aliquid consequatur necessitatibus neque deleniti sunt atque architecto deserunt saepe id, ipsum beatae. Tempore blanditiis officiis quo nihil corrupti excepturi!';
        $Lesson->save();

        $Lesson = new Lesson();
        $Lesson->course_id = '3';
        $Lesson->judul = 'ARITHMETIC';
        $Lesson->deskripsi = 'Mempelajari operator arithmetic di JS';
        $Lesson->materi='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima eaque, magni, vitae dicta tempora repellendus soluta ut exercitationem nostrum, accusantium cumque harum ducimus et. Magni quasi corporis aliquid voluptatibus, veniam velit aut, est voluptates maiores eius neque porro voluptatem fuga? Cupiditate, necessitatibus sit. Saepe, amet. Quaerat architecto quo ipsa totam voluptate. Iusto exercitationem a, repellat numquam doloremque ipsa quae, aut repellendus deserunt voluptatibus perferendis nobis sapiente enim. Rem, nulla sit. Tempore fuga corrupti odio! Error dolor adipisci laudantium, aperiam, eligendi aliquid consequatur necessitatibus neque deleniti sunt atque architecto deserunt saepe id, ipsum beatae. Tempore blanditiis officiis quo nihil corrupti excepturi!';
        $Lesson->save();

        $Lesson = new Lesson();
        $Lesson->course_id = '4';
        $Lesson->judul = 'SELECTOR';
        $Lesson->deskripsi = 'Mempelajari operator selector di CSS';
        $Lesson->materi='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima eaque, magni, vitae dicta tempora repellendus soluta ut exercitationem nostrum, accusantium cumque harum ducimus et. Magni quasi corporis aliquid voluptatibus, veniam velit aut, est voluptates maiores eius neque porro voluptatem fuga? Cupiditate, necessitatibus sit. Saepe, amet. Quaerat architecto quo ipsa totam voluptate. Iusto exercitationem a, repellat numquam doloremque ipsa quae, aut repellendus deserunt voluptatibus perferendis nobis sapiente enim. Rem, nulla sit. Tempore fuga corrupti odio! Error dolor adipisci laudantium, aperiam, eligendi aliquid consequatur necessitatibus neque deleniti sunt atque architecto deserunt saepe id, ipsum beatae. Tempore blanditiis officiis quo nihil corrupti excepturi!';
        $Lesson->save();
    }
}