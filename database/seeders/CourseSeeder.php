<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Image;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = Course::factory(40)->create();

        foreach ($cursos as $curso) {
            Image::factory(1)->create([
                'imageable_id' => $curso->id,
                'imageable_type' => Course::class,
            ]);
        }
    }
}
