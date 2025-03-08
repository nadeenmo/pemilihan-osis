<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'nama_admin' => 'tes',
            'email' => 'tes@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}