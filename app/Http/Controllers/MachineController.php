<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Production;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   {
    $machines = Machine::all();
    $orders = Order::all(); // supaya bisa ditampilkan juga di index
    return view('Machines.index', compact('machines','orders'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $machines = Machine::all();
        return view('machines.create', compact('machines'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
        {
    $request->validate([
        'machine' => 'required',
        'code' => 'required',
        'detail' => 'nullable'
    ]);

    Machine::create($request->all());

    return redirect()->route('machines.index')->with('success', 'Machine added successfully!');
}



    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
{
    $productions = Production::all(); // ambil produk yang terkait dengan machine ini
    return view('machines.show', compact('machine', 'productions'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        return view('machines.edit', compact('machine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine)
    {
        $request->validate([
            'machine' => 'required',
            'code' => 'required',
            'detail' => 'required',
        ]);

        $machine->update($request->all());

        return redirect()->route('machines.index')
                     ->with('success', 'Machine updated successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        $machine->delete();

        return redirect()->route('machines.index')
                         ->with('success', 'Machine deleted successfully.');
    }
}
