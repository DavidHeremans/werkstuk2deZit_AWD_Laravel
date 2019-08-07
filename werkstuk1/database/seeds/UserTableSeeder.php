<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.be',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user@user.be',
            'password' => bcrypt('123456'),
        ]);

    }
}
