<?php
namespace DatabaseSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            TopicSeeder::class,
            LessonSeeder::class,
        ]);
    }
}
