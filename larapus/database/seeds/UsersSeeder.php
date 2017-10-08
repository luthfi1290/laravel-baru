<?php

use Illuminate\Database\Seeder;
use App\Role,App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role admin
        $adminRole = new Role();
        $adminRole->name = 'admin';
        $adminRole->display_name = 'Admin';
        $adminRole->save();

        //role member 
        $memberRole = new Role();
        $memberRole->name = 'member';
        $memberRole->display_name = 'Member';
        $memberRole->save();

        //sample admin
        $users = new User();
        $users->name = 'Admin Larapus';
        $users->email = 'admin@gmail.com';
        $users->password = bcrypt('rahasia');
        $users->save();
        $users->attachRole($adminRole);

        //sample member
        $users = new User();
        $users->name = 'member Larapus';
        $users->email = 'member@gmail.com';
        $users->password = bcrypt('rahasia');
        $users->save();
        $users->attachRole($memberRole);

    }
}
