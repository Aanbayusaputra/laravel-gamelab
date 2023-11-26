<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neraca;

class TblNeracaController extends Controller
{
    public function index()
    {
        $neracas = Neraca::all();

        return view('neraca.index', compact('neracas'));
    }

    // public function create()
    // {
    //     // Show the form to create a new neraca
    //     return view('neraca.create');
    // }

    // public function store(Request $request)
    // {
    //     // Validate and store the new neraca
    //     // ...

    //     return redirect()->route('neraca.index')->with('success', 'Neraca created successfully');
    // }

    // public function edit($id)
    // {
    //     // Show the form to edit a neraca
    //     $neraca = Neraca::findOrFail($id);

    //     return view('neraca.edit', compact('neraca'));
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validate and update the neraca
    //     // ...

    //     return redirect()->route('neraca.index')->with('success', 'Neraca updated successfully');
    // }

    // public function destroy($id)
    // {
    //     // Delete the neraca
    //     // ...

    //     return redirect()->route('neraca.index')->with('success', 'Neraca deleted successfully');
    // }
}
