<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag(['name' => 'Games']);
        $tag->save();
        $tag = new Tag(['name' => 'Gastsprekers']);
        $tag->save();
        $tag = new Tag(['name' => 'Workshops']);
        $tag->save();
        $tag = new Tag(['name' => 'Ontspanning']);
        $tag->save();
        $tag = new Tag(['name' => 'Informatie']);
        $tag->save();
    }
}
