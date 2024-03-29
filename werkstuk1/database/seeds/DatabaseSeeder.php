<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
