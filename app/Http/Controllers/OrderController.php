<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Car;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orders.index', ['orders'=>Order::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('orders.create',[
        'cars'=> Car::all(),
        'accessories'=> Accessory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        //dd($request->all());
        $order = Order::create($request->all());
        $order->accessories()->attach($request->accessories);

        return redirect()->back()->with(['success'=>'Ordine Inviato con Successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.edit',[
            'order'=> $order,
            'cars'=> Car::all(),
            'accessories'=> Accessory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->all());
        $order->accessories()->detach();
        $order->accessories()->attach($request->accessories);

        return redirect()->back()->with(['success'=>'Ordine modificato correttamente!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
