<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'name' => 'aaa',
                'email' => 'test@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => 'ジョージ',
                'email' => 'test@www.com',
                'password' => Hash::make('password222')
            ],
            [
                'name' => 'ccc',
                'email' => 'test@kkk.com',
                'password' => Hash::make('password333')
            ],
            [
                'name' => 'ddd',
                'email' => 'test@aaa.com',
                'password' => Hash::make('password555')
            ],
        ]);
    }
}
