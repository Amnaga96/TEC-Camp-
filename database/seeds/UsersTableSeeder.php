<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Admin';
        $admin->password = bcrypt('123');
        $admin->email = 'admin@admin.test';
        $admin->user_type = 'admin';
        $admin->save();

        
    }
}
