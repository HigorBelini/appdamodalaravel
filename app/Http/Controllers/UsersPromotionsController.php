<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Validation\Rule;
use App\Company;
use App\Promotion;
use App\UserPromotion;
use App\Favorite;

class UsersPromotionsController extends Controller
{
    public function index()
    {
        $listaMigalhas = json_encode([
          ["titulo"=>"Administrador","url"=>route('administrador')],
          ["titulo"=>"Cadastros e promoções","url"=>""]
        ]);


        $listaModelo = UserPromotion::select('id', 'promotion_name', 'user_id')->paginate(5);
    

    	foreach ($listaModelo as $key => $value) {
    		$value->user_id = \App\User::find($value->user_id)->name;
    	}


        return view('administrador.usuariospromocoes.index',compact('listaMigalhas','listaModelo'));
    }

    public function show($id)
    {
        return UserPromotion::find($id);
    }

    //api

    public function cadastrospromocoes(request $request){
       $user = $request->user();
       $data = $request->all();
       $date = date('Y-m-d H:i:s');
       $promotion = Promotion::find($data);

       foreach ($promotion as $key => $value) {
         $userpromotion = new UserPromotion;
         $userpromotion->promotion_id = $value->id;
         $userpromotion->promotion_name= $value->name;
         $userpromotion->user_id = $user->id;
         $userpromotion->date = $date;
         $userpromotion->save();
         $json = UserPromotion::all();
      }
       return $json;
    }

    public function listacadastrospromocoes(request $request){
        $user = $request->user();
        return $user->userpromotions;
    }  

    public function promotionsuserlist(request $request){
        $user = $request->user();
        return $user->userpromotions()->orderBy('date','DESC')->get();
        /*$userpromotions = DB::table('userspromotions')
                          ->join('users','users.id','=','userspromotions.user_id')
                          ->join('promotions','promotions.id','=','userspromotions.promotion_id')
                          ->select('users.id', 'users.name','users.email','users.city', 'users.uf', 'users.gender', 'users.datebirth', 'users.profileimage', 'userspromotions.id', 'userspromotions.promotion_id', 'userspromotions.user_id', 'userspromotions.date','userspromotions.name', 'promotions.id', 'promotions.company_id', 'promotions.name', 'promotions.startdate', 'promotions.finaldate', 'promotions.descriptive', 'promotions.user_id', 'promotions.promotionimage', 'promotions.logocompany')
                          ->whereNull('userspromotions.deleted_at')
                          ->orderBy('userspromotions.date','DESC')
                          ->get();
        return $userpromotions;*/
    }   
}
