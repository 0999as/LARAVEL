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
        DB::table('profiles')->insert([
            [
                'name' => Str::random(6),
                'surname' => Str::random(8),
                'email' => ('bot0@email.com'),
                'user_id' => (1),
            ],
        ]);
    }
}
