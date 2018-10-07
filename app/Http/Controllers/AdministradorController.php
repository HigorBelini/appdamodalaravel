<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Promotion;
use App\User;
use App\UserPromotion;

class AdministradorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $listaMigalhas = json_encode([
            ["titulo"=>"Administrador","url"=>""]
        ]);

        $totalEmpresas =  Company::count();
        $totalPromocoes = Promotion::count();
        $totalUsuarios = User::count();
        $totalAdministradores = User::where('admin','=','S')->count();
        $totalCadastrosPromocoes = UserPromotion::count();


        return view('administrador', compact('listaMigalhas','totalEmpresas','totalPromocoes', 'totalUsuarios', 'totalAdministradores', 'totalCadastrosPromocoes'));
    
    }
}
