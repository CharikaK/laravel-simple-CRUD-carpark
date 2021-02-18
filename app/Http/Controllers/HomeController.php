<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class HomeController extends Controller
{
    
    public function index() {      
        return view('Controllerwelcome'); 
    }

    public function showAll() {
        $cars = car::all();
        // method 01
        return view('home', compact('cars'));  
        
        // method 02
        /* return view('home', 
                    ['cars'=>$cars]
        );  */
    }
}
