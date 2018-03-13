<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin1234',
        ]);
    }
}
