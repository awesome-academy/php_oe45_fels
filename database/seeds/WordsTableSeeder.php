<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use App\Models\Word;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 40;
        for ($i = 0; $i < $limit; $i++) {
            Word::create([
                'vocabulary' => $faker->lastName,
                'spelling' => $faker->word,
                'translate' => $faker->text,
                'category_id' => $faker->numberBetween($min = 0, $max = 5),
                'lession_id' => $faker->numberBetween($min = 0, $max = 5),
                'audio' => $faker->url,
            ]);
        }
    }
}
