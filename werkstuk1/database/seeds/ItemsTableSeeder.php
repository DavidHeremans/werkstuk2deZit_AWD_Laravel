<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Item([
           'title' => 'Goed nieuws',
           'Content' => 'Dit is uitstekend nieuws'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'Gastspreker',
            'Content' => 'Deze persoon komt spreken op ehackB.'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'Activiteiten',
            'Content' => 'Je kan Fortnite spelen op ehackB!'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'CSGO',
            'Content' => 'Er zal een csgo competitie zijn.'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'FIFA 20',
            'Content' => 'JE kan er ook FIFA spelen.'
        ]);
        $item->save();

    }
}
