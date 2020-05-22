<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "email" => "dev@dev.dev",
            "password"=> Hash::make('dev'),
            "name"=> "Dev"
        ]);
    }
}
