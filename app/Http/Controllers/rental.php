<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class rental extends Controller
{
    function car(){
        return view('car');
    }
    function inp_car(){
        
        $car = new Car();
        $car -> CARNAME = request('name');

        $car->save();
       
        return redirect('/car');
    }
}
