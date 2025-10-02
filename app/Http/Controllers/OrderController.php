<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'company' => 'required',
        'product' => 'required',
        'detail' => 'nullable',
        'status' => 'required'
    ]);

    Order::create($request->all());

    return redirect()->route('machines.index')->with('success', 'Order added successfully!');
}
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }       
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'order_number' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'product' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'status' => 'required|string|max:255',
        ]);

        $order->update([
            'order_number' => $request->order_number,
            'customer_name' => $request->customer_name,
            'product' => $request->product,
            'quantity' => $request->quantity,
            'status' => $request->status,
        ]);
        return redirect()->route('orders.index')
                         ->with('success', 'Order updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')
                         ->with('success', 'Order deleted successfully.');
    }
}


