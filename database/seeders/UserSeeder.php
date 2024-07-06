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
                "name" => "Dokter",
                "email" => "Dokter@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "dokter",
                "alamat" => "Jl.Satrio Wibowo 3 No.73, Semarang",
                "nik" => "3260290901",
                "keahlian" => "Poli Gigi",
            ],
            [
                "name" => "Admin",
                "email" => "Admin@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "admin",
                "alamat" => "Jl.Satrio Wibowo 3 No.73, Semarang",
                "nik" => "3260290902",
            ],
            [
                "name" => "Pasien",
                "email" => "Pasien@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "pasien",
                "alamat" => "Jl.Parang Kembang 3 No.73, Semarang",
                "nik" => "3260290903",
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
