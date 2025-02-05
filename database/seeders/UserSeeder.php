<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'john@doe.es', 'password' => bcrypt('12345678')],
            ['name' => 'Pepe', 'email' => 'pepe@pepon.es', 'password' => bcrypt('12345678')],
            ['name' => 'Admin', 'email' => 'admin@admin.es', 'password' => bcrypt('12345678'), 'is_admin' => true],
            ['name' => 'Ana', 'email' => 'ana@ana.es', 'password' => bcrypt('12345678')],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
