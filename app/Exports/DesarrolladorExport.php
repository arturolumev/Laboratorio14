<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Desarrollador;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DesarrolladorExport implements FromView
{
    public function view(): View
    {
        return view('excel.desarrolladores', [
            'desarrolladores' => Desarrollador::all()
        ]);
    }
}
