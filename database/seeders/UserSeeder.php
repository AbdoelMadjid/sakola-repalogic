<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = ['guru', 'tatausaha', 'siswa', 'admin', 'master'];

        foreach ($users as $role) {
            $user = User::create([
                'name' => $role,
                'email' => $role . '@gmail.com',
                'avatar' => 'default.png',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);

            $user->assignRole($role);
        }
    }
}
