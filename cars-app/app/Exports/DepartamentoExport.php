<?php

namespace App\Exports;

use App\Models\Departamento;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartamentoExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('excel.departamentos', [
            'departamentos' => Departamento::all()
        ]);
    }
}
