<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Favorite;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Validation\Rule;
use App\Company;
use App\Promotion;
use App\UserPromotion;

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

    //API

    public function cadastrofavorito(request $request){
        $user = $request->user();
        $data = $request->all();
        $date = date('Y-m-d H:i:s');
        $company = Company::find($data);

        foreach ($company as $key => $value) {
        $favorite = new Favorite;
        $favorite->company_id = $value->id;
        $favorite->company_socialname = $value->socialname;
        $favorite->user_id = $user->id;
        $favorite->date = $date;
        $favorite->save();
        $json = Favorite::all();
        }

        return $json;
        }

    public function listafavoritos(request $request){
        $user = $request->user();
        return $user->favorites;
    }

    public function listafavoritosusuario(request $request){
        $user = $request->user();
        return $user->favorites()->orderBy('date','DESC')->get();
    }
}
