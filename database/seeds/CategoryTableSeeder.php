<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Electric',
            'slug' => 'electric',
        ]);
        DB::table('category')->insert([
            'name' => 'Computer',
            'slug' => 'computer',
            'pid' => 1
        ]);

        DB::table('category')->insert([
            'name' => 'Mouse',
            'slug' => 'mouse',
            'pid' => 2
        ]);
    }
}
