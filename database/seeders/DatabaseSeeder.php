<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        DB::table('users')->insert([
            [
			    'name' => 'John',
			    'email' => .'@gmail.com',
			    'age' => 20,
			    'salary' => 30000,
            ],
            [
			    'name' => 'Adam',
			    'email' => .'@gmail.com',
			    'age' => 25,
			    'salary' => 35000,
            ],
            [
			    'name' => 'Tom',
			    'email' => .'@gmail.com',
			    'age' => 28,
			    'salary' => 40000,
            ],
            [
			    'name' => 'Kris',
			    'email' => .'@gmail.com',
			    'age' => 30,
			    'salary' => 45000,
            ],
            [
			    'name' => 'Sam',
			    'email' => .'@gmail.com',
			    'age' => 32,
			    'salary' => 45000,
            ],
            [
			    'name' => 'Oleg',
			    'email' => .'@gmail.com',
			    'age' => 35,
			    'salary' => 45000,
            ],
        ]);
    }
}
