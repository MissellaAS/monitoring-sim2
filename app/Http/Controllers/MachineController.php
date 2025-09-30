<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $machines = Machine::all();
        return view('machines.index', compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //         $products = [
    //     ['name' => 'RING', 'status' => 'ON PROCESS'],
    //     ['name' => 'SHAFT', 'status' => 'FINISH'],
    //     ['name' => 'BOLT', 'status' => 'PREPARE'],
    //     ['name' => 'POCKET', 'status' => 'ON PROCESS'],
    // ];
        // arahkan ke file resources/views/machines/create.blade.php
        // return view('machines.show', compact('products'));

        $machines = machine::all();
        return view('machines.create', compact('machines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'machine' => 'required|string|max:255',
            'code_machine' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        Machine::create([
            'machine' => $request->machine,
            'code_machine' => $request->code_machine,
            'detail' => $request->detail,
        ]);

        return redirect()->route('machines.index')
                         ->with('success', 'Machine added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
{
    // contoh: produk diambil dari relasi
    // pastikan model Machine punya relasi ->products()
    $products = [
        ['name' => 'RING', 'status' => 'ON PROCESS'],
        ['name' => 'SHAFT', 'status' => 'FINISH'],
        ['name' => 'BOLT', 'status' => 'PREPARE'],
        ['name' => 'POCKET', 'status' => 'ON PROCESS'],
    ];

    // jika sudah ada tabel relasi di DB:
    // $products = $machine->products;

    return view('machines.show', compact('machine', 'products'));
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
            'machine' => 'required|string|max:255',
            'code_machine' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        $machine->update($request->all());

        return redirect()->route('machines.index')
                         ->with('success', 'Machine updated successfully.');
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
