<?php

namespace App\Http\Controllers;

use App\Exports\DepartamentoExport;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function excel()
    {
        return \Excel::download(new DepartamentoExport, 'departamentos.xlsx');
    }
}
