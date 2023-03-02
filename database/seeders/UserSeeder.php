<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uuidUsersAdministrator = Uuid::uuid4();
        $createUsersAdministrator = DB::table('users')->insert([
            'uuid' => $uuidUsersAdministrator,
            'name' => 'Administrator',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('*administrator0!*'),
            'status' => 1,
            'created_by' => $uuidUsersAdministrator,
            'updated_by' => $uuidUsersAdministrator,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
