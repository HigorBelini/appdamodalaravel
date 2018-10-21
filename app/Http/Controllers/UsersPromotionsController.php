<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\UserPromotion;
use Illuminate\Support\Facades\DB;

class UsersPromotionsController extends Controller
{
    public function index()
    {
        $listaMigalhas = json_encode([
          ["titulo"=>"Administrador","url"=>route('administrador')],
          ["titulo"=>"Cadastros e promoções","url"=>""]
        ]);


        $listaModelo = UserPromotion::select('id', 'promotion_id', 'user_id')->paginate(5);

        return view('administrador.usuariospromocoes.index',compact('listaMigalhas','listaModelo'));
    }
}
