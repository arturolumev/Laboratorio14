<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desarrollador; //modelo desarrollador

class DesarrolladorController extends Controller
{
    public function index()
    {
        $desarrollador = Desarrollador::All();
        return view('desarrollador.index')->with('desarrollador', $desarrollador);
    }
}
