<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(topicsSeeder::class);
        $this->call(lessonsSeeder::class);
    }
}

class topicsSeeder extends Seeder
{
    public function run()
    {
        DB::table('topics')->insert([
            ['name'=>'Gia đình'],
            ['name'=>'Xã hội'],
            ['name'=>'Môi trường'],
            ['name'=>'Giao tiep'],
            ['name'=>'Tre em'],
            ['name'=>'Bo me'],
            ['name'=>'Bien'],
            ['name'=>'Song'],
            ['name'=>'Ho'],
            ['name'=>'Giao thong'],
        ]);
    }
}
class lessonsSeeder extends Seeder
{
    public function run()
    {
        DB::table('lessons')->insert([
            ['name'=>'Ba','described'=>'father','topic_id'=>'1'],
        ]);
    }
}
