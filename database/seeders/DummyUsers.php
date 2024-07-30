<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class DummyUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nik' => '123456789',
                'name' => 'Alfadli',
                'email' => 'alfadli@gmail.com',
                'no_hp' => '08123456789',
                'password' => bcrypt('intern123'),
                'role' => 'Intern',
            ],
            [
                'nik' => '012345678',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'no_hp' => '08098765432',
                'password' => bcrypt('admin123'),
                'role' => 'Admin',
            ]
        ];

        foreach ($userData as $key => $val) {
            try {
                User::create($val);
                Log::info("Seeding berhasil untuk user: " . $val['name']);
            } catch (\Exception $e) {
                Log::error("Gagal melakukan seeding untuk user: " . $val['name'] . " - Error: " . $e->getMessage());
            }
        }
    }
}
