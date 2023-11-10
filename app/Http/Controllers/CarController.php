<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Auth;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        $owner = auth()->user();
        $cars = $owner->cars;
        
        return view("owner.allcars", ["cars"=> $cars]);
    }
    public function addcar()
    {
        // $cars = Car::all();
        // return view("", compact(""));
        return view("owner.addcar");
    }

   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data (including the file uploads)
        $request->validate([
            'carname' => 'required',
            'mileage' => 'required',
            'plate_no' => 'required',
            'daily_price' => 'required',
            'model' => 'required',
            'fuel_type' => 'required',
            'carid' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required',
            'condition' => 'required',
        ]);
    
        // Handle file upload for 'carid'
        if ($request->hasFile('carid')) {
            $caridname = time() . '.' . $request->carid->extension();
            $request->carid->move(public_path('owner/caridimg'), $caridname);
            $caridPath = 'owner/caridimg/' . $caridname;
        } else {
            $caridPath = null;
        }
    
        // Handle file upload for 'image'
        if ($request->hasFile('image')) {
            $carimgename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('owner/carimg'), $carimgename);
            $imagePath = 'owner/carimg/' . $carimgename;
        } else {
            $imagePath = null;
        }
    
        // Create a new car record
        $car = new Car([
            'carname' => $request->input('carname'),
            'mileage' => $request->input('mileage'),
            'plate_no' => $request->input('plate_no'),
            'daily_price' => $request->input('daily_price'),
            'carid' => $caridPath,
            'image' => $imagePath,
            'model' => $request->input('model'),
            'fuel_type' => $request->input('fuel_type'),
            'address' => $request->input('address'),
            'condition' => $request->input('condition'),
        ]);
    
        // Assuming you have an authenticated user, you can associate the car with the user
        auth()->user()->cars()->save($car);
    
        // Redirect back or to a success page
        return redirect()->route('cars.index')->with('success', 'Car added successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
           $car  = Car::where('id', $id)->first();
           return view('owner.showcar', ['car'=> $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::where('id', $id)->first();
        return view('owner.editcar', ['car'=> $car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $car = Car::where('id', $id)->first();
        // Validate the form data (including the file uploads)
        $request->validate([
            'carname' => 'required',
            'mileage' => 'required',
            'plate_no' => 'required',
            'daily_price' => 'required',
            'model' => 'required',
            'fuel_type' => 'required',
            'carid' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required',
            'condition' => 'required',
        ]);
        
        // Handle file upload for 'carid'
        if ($request->hasFile('carid')) {
            $caridname = time() . '.' . $request->carid->extension();
            $request->carid->move(public_path('owner/caridimg'), $caridname);
            $caridPath = 'owner/caridimg/' . $caridname;
        } else {
            $caridPath = $car->carid;
        }
        
        // Handle file upload for 'image'
        if ($request->hasFile('image')) {
            $carimgename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('owner/carimg'), $carimgename);
            $imagePath = 'owner/carimg/' . $carimgename;
        } else {
            $imagePath = $car->image;
        }
        
        // Create a new car record
       
            $car['carname'] = $request->carname;
            $car['mileage'] = $request->mileage;
            $car['plate_no'] = $request->plate_no;
            $car['daily_price'] = $request->daily_price;
            $car['carid'] = $caridPath;
            $car['image'] = $imagePath;
            $car['model'] = $request->model;
            $car['fuel_type'] = $request->fuel_type;
            $car['address'] = $request->address;
            $car['condition'] = $request->condition;
            
            
            // Assuming you have an authenticated user, you can associate the car with the user
            $car->update();
            // dd($request->all());
            
            // Redirect back or to a success page
            return redirect()->route('cars.index')->with('success', 'Car update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        
        $car->delete();
        return redirect()->route('cars.index')->with('success','car deleted');
    }

    public function searchcar(string $add){
         
        
    }
}
