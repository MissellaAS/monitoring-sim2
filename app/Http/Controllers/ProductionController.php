<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use App\Models\Machine;

class ProductionController extends Controller
{
    public function index()
    {
        $productions = Production::all();
        return view('productions.index', compact('productions'));
    }

    public function create()
    {   
        $machines = Machine::all();
        $productions = Production::all();
        return view('productions.create', compact('machines' ,'productions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'machine_id' => 'required|exists:machines,id',
            'product_id' => 'required|exists:products,id',
        ]);

        Production::create([
            'machine_id' => $request->machine_id,
            'product_id' => $request->product_id,
        ]);

        Production::create($request->all());

        return redirect()->route('productions.index')->with('success', 'Production created successfully.');
    }

    public function show(Production $production)
    {
        return view('productions.show', compact('production'));
    }

    public function edit(Production $production)
    {
        return view('productions.edit', compact('production'));
    }

    public function update(Request $request, Production $production)
    {
        $production->update($request->all());

        return redirect()->route('productions.index')->with('success','Production updated successfully');
    }

    public function destroy(Production $production)
    {
        $production->delete();

        return redirect()->route('productions.index')->with('success', 'Production deleted successfully.');
    }

    public function tabel()
    {   
        $productions = Production::all();
        return view('productions.tabel', compact('productions'));
    }
}
