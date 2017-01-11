<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language')->insert([
            'code' => 'en',
            'name' => 'english',
        ]);

        DB::table('language')->insert([
            'code' => 'zh-tw',
            'name' => '繁體',
        ]);

        DB::table('language')->insert([
            'code' => 'zh-cn',
            'name' => '簡體',
        ]);
    }
}
