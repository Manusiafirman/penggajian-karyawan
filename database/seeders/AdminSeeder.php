<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Admin = Admin::create(['username' => 'genta', 'email' => 'genta@gmail.com', 'password' => 'genta123']);
    }
}
