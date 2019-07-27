<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function  getItems()
    {
        return $this->createDummyData();
    }

    public function createDummyData(){
        $items = [
           [ 'id' => 1, 'title' => 'Goed nieuws' , 'content' => 'Dit nieuwsbericht is heel goed nieuws.'],
            [ 'id' => 2, 'title' => 'Informatief nieuws' , 'content' => 'Dit nieuwsbericht is heel informatief nieuws voor wie interesse heeft.'],
            [ 'id' => 3, 'title' => 'Raar nieuws' , 'content' => 'Dit is heel raar nieuws.']

        ];
        return $items;
    }

}
