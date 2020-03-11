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
        User::truncate();
        \App\User::create([
            'name' => 'Super Admin',
            'email' => 'info@user.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
