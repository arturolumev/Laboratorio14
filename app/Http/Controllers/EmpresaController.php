<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa; //modelo empresa

class EmpresaController extends Controller
{
    public function index()
    {
        $empresa = Empresa::All();
        return view('empresa.index')->with('empresa', $empresa);
    }
}
