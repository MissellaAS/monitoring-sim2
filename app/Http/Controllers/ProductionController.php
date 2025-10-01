<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function index()
    {
        $productions = Production::all();
        return view('productions.index', compact('productions'));
    }

    public function create()
    {
        return view('productions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required',
            'machine' => 'required',
            'product' => 'required',
            'status'  => 'required',
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
}
