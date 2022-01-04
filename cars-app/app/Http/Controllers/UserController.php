<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Models\User;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('users.create')->with('departamentos', $departamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->back()->with('message', $user->nombre . ' ' . $user->apellido . ' fuiste registrado con exito');
    }

    public function userWin()
    {
        $user = User::orderByRaw("RAND()")->limit(1)->pluck('id');
        $userData = DB::table('users')->where('id', $user)->get();
        // dd($userData);
        return view('users.show')->with('userData', $userData);
    }

    public function excel()
    {
        return \Excel::download(new UserExport, 'users.xlsx');
    }
}
