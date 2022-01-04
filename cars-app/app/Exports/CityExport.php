<?php

namespace App\Exports;

use App\Models\City;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CityExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('excel.cities', [
            'cities' => City::all()
        ]);
    }
}
