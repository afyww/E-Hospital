<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                "name" => "Liya",
                "email" => "Liya@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "pasien",
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
