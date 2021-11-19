<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Larapus";
        $adminRole->save();

        //membuat sample admin
        $admin = new User;
        $admin->name = "Admin Larapus";
        $admin->email = "Admin@gmail.com";
        $admin->password = bcrypt("Rahasia");
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
