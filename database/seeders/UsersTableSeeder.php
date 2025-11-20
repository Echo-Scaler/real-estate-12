<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'status' => 'active',
            ],
            //agent
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@example.com',
                'password' => Hash::make('123456'),
                'role' => 'agent',
                'status' => 'active',
            ],
            //user
            [
                'name' => 'User ',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('123456'),
                'role' => 'user',
                'status' => 'active',
            ]
        ]);
    }
}
