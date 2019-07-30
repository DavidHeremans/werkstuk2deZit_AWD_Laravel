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
           'Content' => 'Dit is uitstekend nieuws',
            'fullcontent' => 'Dit nieuws is zeer goed om te weten als je naar ehackb wilt komen, je moet je namelijk optijd registreren. Doe dit snel want als
            het vol zit heb je pech!'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'Gastspreker',
            'Content' => 'David Heremans komt spreken op EhackB!',
            'fullcontent' => 'Als je deze persoon niet kent, kom dan zeker af om hem te leren kennen. Met zijn uitgebreide kennis over alles is dit zeker
             de moeite waard.'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'Activiteiten',
            'Content' => 'Je kan Fortnite spelen op ehackB!',
            'fullcontent' => 'Als je deze persoon niet kent, kom dan zeker af om hem te leren kennen. Met zijn uitgebreide kennis over alles is dit zeker
             de moeite waard.'
        ]);
        $item->save();
        $item = new Item([
            'title' => 'CSGO',
            'Content' => 'Er zal een csgo competitie zijn.',
            'fullcontent' => 'Als je deze persoon niet kent, kom dan zeker af om hem te leren kennen. Met zijn uitgebreide kennis over alles is dit zeker
             de moeite waard.'

        ]);
        $item->save();
        $item = new Item([
            'title' => 'FIFA 20',
            'Content' => 'JE kan er ook FIFA spelen.',
            'fullcontent' => 'Als je deze persoon niet kent, kom dan zeker af om hem te leren kennen. Met zijn uitgebreide kennis over alles is dit zeker
             de moeite waard.'
        ]);
        $item->save();

    }
}
