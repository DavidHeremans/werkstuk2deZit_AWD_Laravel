<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event([
            'title' => 'Etisch hacken',
            'speaker' => 'Inti De Ceukelaire',
            'description' => 'Hoe hack je etisch',
            'location' => 'Audi 1',
            'datetime' => '2020-04-17 16:00:00',
            'src' => '/images/IMG_0145.PNG',
            'availablePlaces' => 50
        ]);
        $event->save();
        $event = new Event([
            'title' => 'Cybersecurity',
            'speaker' => 'Rutger Truyers',
            'description' => 'Cloud security in IaaS, SaaS, PaaS & Next Generation Firewalls today',
            'location' => 'Audi 2',
            'datetime' => '2020-04-17 16:00:00',
            'src' => '/images/IMG_0145.PNG',
            'availablePlaces' => 35
        ]);
        $event->save();
        $event = new Event([
            'title' => 'IoT',
            'speaker' => 'Matts Devriendt',
            'description' => 'IoT & security in IoT: Why before how',
            'location' => 'Audi 1',
            'datetime' => '2020-04-17 17:00:00',
            'src' => '/images/IMG_0145.PNG',
            'availablePlaces' => 35
        ]);
        $event->save();
    }
}
