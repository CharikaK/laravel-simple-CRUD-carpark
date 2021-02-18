<?php

namespace App\Http\Controllers;
use App\Models\car;

use Illuminate\Http\Request;

class CarListControllers extends Controller
{
    // CRUD - create 
    public function add(Request $request){        
        $cars = new Car();
        $cars->model=$request->model;
        $cars->number_plate=$request->number_plate;
        $cars->colour=$request->colour;
        $cars->payments='0.00';
        $cars->save();
        // returning back to the 
        return back()->with('car_added','New car is now parked.'); // storing session. 

        // return redirect('/showAll')->with('car_added','New car is now parked.'); // storing session.;
    }

    // CRUD - Read
    public function show($id){

       $cardetail=Car::find($id); // this is an array
       return view('car-details',compact('cardetail'));

    }

    public function getFirstBasedOnColour($colour){
        $carByColour = Car::all()->where('colour',$colour)->first(); // this is an object
        return view('car-details',compact('carByColour'));
    }

    /* //public function getBasedOnColour(Request $request){
        $carByColour = Car::all()->where('colour','Green')->first();

        return view('car-details',compact('carByColour'));
    } */

    // CRUD - Update - get the form up
    public function editCar($id){

        $caredit = Car::find($id); // this is an array        
        return view('edit-car', compact('caredit'));
    }

    // CRUD - Update
    public function updateCar(Request $request){
        $payments = $request->payments;

        $cars = Car::find($request->id);        
        $cars->model=$request->model;
        $cars->number_plate=$request->number_plate;
        $cars->colour=$request->colour;
        $cars->payments=$payments; 
        $cars->save();
        return back()->with('car_edited','Car details are now updated.'); // storing session. 
    }

    // CRUD - Delete
    public function deleteCar($id){
        $cardelete = Car::find($id);
        $cardelete->delete();
        return back()->with('car-deleted', 'Car is deleted successfully');
    }
        


}
