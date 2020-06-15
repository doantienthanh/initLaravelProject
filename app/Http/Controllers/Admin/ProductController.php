<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Room;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    function index(){
        return view('room.addRoom');
    }

    function addProduct(REQUEST $request){
           $name=$request->name;
           $type=$request->typeroom;
           $number=$request->number;
           $price=$request->price;
           $area=$request->area;
           $file = $request->file('image')->store("public");
           $room= new Room;
           $room->name=$name;
           $room->typeroom=$type;
           $room->number=$number;
           $room->price=$price;
           $room->area=$area;
           $room->image=$file;
           $room->save();
           return redirect('/home');
       }
    
}
