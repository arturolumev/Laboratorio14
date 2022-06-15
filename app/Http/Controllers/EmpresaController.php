<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa; //modelo empresa
use Maatwebsite\Excel\Facades\Excel; // necesario para exportar excel
use App\Exports\EmpresaExport; // export desarrollador
use PDF;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresa = Empresa::All();
        return view('empresa.index')->with('empresa', $empresa);
    }
    public function exportexcel()
    {
        return Excel::download(new EmpresaExport, 'empresas.xlsx');
    }
    public function exportpdf()
    {
        $empresas = Empresa::all();
        $pdf = PDF::loadView('pdf.empresas', ['empresas'=> $empresas]);
        return $pdf->download('empresas.pdf');
    }
}
