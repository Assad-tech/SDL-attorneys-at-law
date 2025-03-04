<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'role_id' => 1,
                'first_name' => 'joe',
                'last_name' => 'doe',
                'image' => null,
                'status' => 0,
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin123'), // Password is hashed using bcrypt
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => 2,
                'first_name' => 'karla',
                'last_name' => 'john',
                'image' => null,
                'status' => 0,
                'email' => 'karla@example.com',
                'password' => bcrypt('admin123'), // Password is hashed using bcrypt
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($data as $item) {
            DB::table('users')->insert($item);
        }
    }
}
