<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('cities')->insert([
            ['name' => \Illuminate\Support\Str::random(10)],
            ['name' => \Illuminate\Support\Str::random(10)],
            ['name' => \Illuminate\Support\Str::random(10)],
            ['name' => \Illuminate\Support\Str::random(10)],
            ]
        );
    }
}
