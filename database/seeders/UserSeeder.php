<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createDefaultUsers();
        $this->createDemoUsers();
    }

    private function createDefaultUsers()
    {
        User::create([
            'name'              => 'admin',
            'last_name'              => 'admin',
            'phone'              => '0111111111',
            'usertype'              => '0',
            'email'             => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123123'),
            'remember_token'    => Str::random(10),
        ]);
    }

    private function createDemoUsers()
    {
        User::create([
            'name'              => 'user',
            'last_name'              => 'user',
            'phone'              => '0111111111',
            'usertype'              => '1',
            'email'             => 'user@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123123'),
            'remember_token'    => Str::random(10),
        ]);
    }

}