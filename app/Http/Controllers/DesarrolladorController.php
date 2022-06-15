<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; // necesario para exportar excel
use App\Models\Desarrollador; // modelo desarrollador
use App\Exports\DesarrolladorExport; // export desarrollador
use PDF; // para poder exportar pdf

class DesarrolladorController extends Controller
{
    public function index()
    {
        $desarrollador = Desarrollador::All();
        return view('desarrollador.index')->with('desarrollador', $desarrollador);
    }
    public function exportexcel() //funcion para exportar en excel
    {
        return Excel::download(new DesarrolladorExport, 'desarrolladores.xlsx');
    }
    public function exportpdf() //funcion para exportar en excel
    {
        $desarrolladores = Desarrollador::all();
        $pdf = PDF::loadView('pdf.desarrolladores', ['desarrolladores'=> $desarrolladores]);
        return $pdf->download('desarrolladores.pdf');
    }
}
