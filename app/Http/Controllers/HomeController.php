<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Room;
class HomeController extends Controller
{
    function getHome(){
        $rooms= Room::all();
        return view('home',['rooms'=>$rooms]);

    }
}
