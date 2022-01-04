<?php

namespace App\Http\Controllers;

use App\Exports\CityExport;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function byDepartamento($id)
    {
        $cities = City::where('departamento_id', $id)->get();
        return $cities;
    }

    public function excel()
    {
        return \Excel::download(new CityExport, 'ciudades.xlsx');
    }
}
