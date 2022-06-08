<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa; //modelo desarrollador

class EmpresaController extends Controller
{
    public function index()
    {
        $empresa = Empresa::All();
        return view('empresa.index')->with('empresa', $empresa);
    }
}
