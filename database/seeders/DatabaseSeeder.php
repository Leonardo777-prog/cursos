<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Level;
use App\Models\Price;
use Asm89\Stack\Cors;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('cursos');

        $this->call(UserSeeder::class);

        $this->call(LevelSeeder::class);

        $this->call(CategorySeeder::class);

        $this->call(PriceSeeder::class);

        $this->call(CourseSeeder::class);
    }
}
