<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'name' => 'Shwe Sin Win Thant',
            'email' => 'shwesinwt21@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('211221'),
            'remember_token' => '',
        ]);
    }
}
