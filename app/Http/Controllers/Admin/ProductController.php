<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Room;
class ProductController extends Controller
{
    function index(){
        return view('room.addRoom');
    }
    function addProduct(REQUEST $request){
       
        $validatedData = $request->validate([
            'name' => 'required,max:200',
            'type' => 'max:30',
            'number' => 'mix:1,max:50',
            'area' => 'max:200,min:50',
            'price'=> 'max:500000,min:100000',
        ]);
           $name=$request->name;
           $type=$request->type;
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
