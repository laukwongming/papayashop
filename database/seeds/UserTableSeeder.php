<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_user')->insert([
            'username' =>'siuminglau',
            'password' => bcrypt('123456'),
        ]);
    }
}
