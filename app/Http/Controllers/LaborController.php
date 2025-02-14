<?php

namespace App\Http\Controllers;

use App\Models\Labor;
use Illuminate\Http\Request;

class LaborController extends Controller
{
    public function index()
    {
        $labors = Labor::latest()->get();
        return view('components.labors.index', compact('labors'));
    }

    public function create()
    {
        return view('components.labors.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'labor_realizada' => 'required',
            'fecha' => 'required|date',
            'cantidad' => 'required|integer',
            'tarifa' => 'required|numeric',
            'empleado' => 'required|regex:/^[\pL\s]+$/u',
            'lote' => 'required',
        ]);

        Labor::create($request->all());

        return redirect()->route('labors.index')->with('success', 'Labor registrada correctamente.');
    }

    public function edit(Labor $labor)
    {
        return view('components.labors.edit', compact('labor'));
    }

    public function update(Request $request, Labor $labor)
    {
        $request->validate([
            'labor_realizada' => 'required',
            'fecha' => 'required|date',
            'cantidad' => 'required|integer',
            'tarifa' => 'required|numeric',
            'empleado' => 'required|regex:/^[\pL\s]+$/u',
            'lote' => 'required',
        ]);

        $labor->update($request->all());

        return redirect()->route('labors.index')->with('success', 'Labor actualizada correctamente.');
    }

    public function destroy(Labor $labor)
    {
        $labor->delete();
        return redirect()->route('labors.index')->with('success', 'Labor eliminada correctamente.');
    }
}

