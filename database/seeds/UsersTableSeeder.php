<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'DicSo92',
            'email' => 'luzzi.charly@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('admin'),
            'settings' => '{"pagination": 8}',
            'email_verified_at' => Carbon::now(),
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'settings' => '{"pagination": 8}',
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
