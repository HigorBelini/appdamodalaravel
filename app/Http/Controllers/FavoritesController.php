<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Favorite;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    public function index()
    {
        $listaMigalhas = json_encode([
          ["titulo"=>"Administrador","url"=>route('administrador')],
          ["titulo"=>"Empresas Favoritas","url"=>""]
        ]);


        $listaModelo = Favorite::select('id', 'company_socialname', 'user_id')->paginate(5);
    

    	foreach ($listaModelo as $key => $value) {
    		$value->user_id = \App\User::find($value->user_id)->name;
    		//$value->promotion_id = \App\Promotion::find($value->promotion_id)->name;
    	}


        return view('administrador.favoritos.index',compact('listaMigalhas','listaModelo'));
    }

    public function show($id)
    {
        return Favorite::find($id);
    }
}
