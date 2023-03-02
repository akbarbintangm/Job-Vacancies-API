<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@jsonapi.com',
            'password' => 'secret'
        ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'administrator@gmail.com',
            'password' => 'adminadmin'
        ]); */

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@jsonapi.com',
            'password' => Hash::make('secret')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('adminadmin')
        ]);
    }
}
