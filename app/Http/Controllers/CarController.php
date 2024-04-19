<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\CarRequest;

class CarController extends Controller
{
    public function index()
    {
        return view('cars.index',[
            'cars'=> Car::all(),
        ]);
    }

    public function create()
    {
        return view('cars.create',[
            'car'=> new Car(),
            'route'=> route('cars.store'),
            'title'=>'Aggiungi una nuova macchina!',
            'value_name'=>old('name'),
            'value_model'=>old('model'),
            'value_price'=>old('price'),
            'btn'=>'Aggiungi Auto',
        ]);
    }

    public function store(CarRequest $request)
    {
        //dd($request->all());
        Car::create($request->all());

        return redirect()->back()->with(['success'=>'Auto inserita correttamente nel catalogo!']);
    }

    public function edit(Car $car)
    {
        return view('cars.create',[
            'car'=>$car,
            'route'=> route('cars.update', $car),
            'title'=>'Modifica Auto!',
            'value_name'=>old('name', $car->name),
            'value_model'=>old('model', $car->model),
            'value_price'=>old('price' , $car->price),
            'btn'=>'Modifica Auto',
        ]);
    }

    public function update(Car  $car)
    {
        return ciao;
    }

    public function destroy()
    {

    }
}
