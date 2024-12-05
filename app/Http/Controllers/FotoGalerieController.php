<?php

namespace App\Http\Controllers;

use App\Models\FotoGalerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FotoGalerieController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
      
    }
}
