<?php

namespace App\Http\Controllers;

use App\Models\Automovil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutomovilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $automoviles = Automovil::all();
        return view('index', compact('automoviles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Automovil::create($request->all());
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $automovil = Automovil::findOrFail($id);
        return view('show', compact('automovil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $automovil = Automovil::findOrFail($id);
        return view('edit', compact('automovil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $automovil = Automovil::findOrFail($id);
        $automovil->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Automovil::destroy($id);
        return redirect()->route('index');
    }
}
