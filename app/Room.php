<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    function getPrice(){
   
        $formatedPrice=number_format($this->price,0,',','.');
        return $formatedPrice." VND";
     }
     function getArea(){
   
        $formatedArea=number_format($this->area,0,',','.');
        return $formatedArea." m2";
     }
}
