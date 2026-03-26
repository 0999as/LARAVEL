<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        DB::table('posts1')->insert([
            [
                'title' => Str::random(10),
                'desc' => Str::random(50),
                'text' => Str::random(250),
            ],
            [
                'title' => Str::random(10),
                'desc' => Str::random(50),
                'text' => Str::random(250),
            ],
            [
                'title' => Str::random(10),
                'desc' => Str::random(50),
                'text' => Str::random(250),
            ],
            [
                'title' => Str::random(10),
                'desc' => Str::random(50),
                'text' => Str::random(250),
            ],
            [
                'title' => Str::random(10),
                'desc' => Str::random(50),
                'text' => Str::random(250),
            ],
        ]);
    }
}
