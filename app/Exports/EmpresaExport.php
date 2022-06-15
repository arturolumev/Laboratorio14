<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Empresa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EmpresaExport implements FromView
{
    public function view(): View
    {
        return view('excel.empresas', [
            'empresas' => Empresa::all()
        ]);
    }
}
