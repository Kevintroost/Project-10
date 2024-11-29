<?php

namespace App\Http\Controllers;

use App\Models\FotoGalerie;
use Illuminate\Http\Request;

class FotoGalerieController extends Controller
{
    public function index()
    {
        return FotoGalerie::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|string|max:255',
            'admin_id' => 'required|exists:admins,id',
        ]);

        return FotoGalerie::create($request->all());
    }
}
