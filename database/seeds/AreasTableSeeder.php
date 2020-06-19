<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('areas')->insert([
                ['name' => \Illuminate\Support\Str::random(10), 'city_id' => 1],
                ['name' => \Illuminate\Support\Str::random(10), 'city_id' => 1],
                ['name' => \Illuminate\Support\Str::random(10), 'city_id' => 2],
                ['name' => \Illuminate\Support\Str::random(10), 'city_id' => 2],
                ['name' => \Illuminate\Support\Str::random(10), 'city_id' => 3],
                ['name' => \Illuminate\Support\Str::random(10), 'city_id' => 3],
                ['name' => \Illuminate\Support\Str::random(10), 'city_id' => 4],
                ['name' => \Illuminate\Support\Str::random(10), 'city_id' => 4],
            ]
        );
    }
}
