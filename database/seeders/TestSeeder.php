<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<5; $i++)
        {
            DB::table('games')->insert([
                'gameName' => Str::random(20),
                // 'gamePrice' => double(10, 2),
                'gameDesc' => Str::random(40),
                'gamePublisher' => Str::random(20),
                // 'gameAgeRating' => int::random,
                'gameGenre' => Str::random(20),
                // 'gameReleaseDate' => date::random(15),
                'gameLanguage' => Str::random(20),
                'gameRequirement' => Str::random(40),
            ]);
        }
    }
}
