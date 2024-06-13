<?php

namespace Database\Seeders;

use App\Models\Account;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('account')->insert([
            'username' => 'author',
            'name' => 'Author 1',
            'password' => 'author',
            'role' => 'author',
        ]);
    }
}
