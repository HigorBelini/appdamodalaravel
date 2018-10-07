<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\User;
use Auth;
use Image;

class EditarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
       $listaMigalhas = json_encode([
            ["titulo"=>"Administrador","url"=>route('administrador')],
            ["titulo"=>"Editar meu perfil","url"=>""]
        ]);

        /*$listaimagems = json_encode([
          ["id"=>1,"nome"=>"Veterinária pequeno porte","Carga horária"=>"Carga horária","Data"=>"Data"],
          ["id"=>2,"nome"=>"Manutenção de hardware","Carga horária"=>"Carga horária","Data"=>"Data"],

        ]);*/

         $listaModelo = User::select('id','name')->where('admin','=','S')->paginate(5);

        return view('administrador.editar.index', compact('listaMigalhas','listaModelo'));
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function update(Request $request, $id){

        if($request->hasFile('profileimage')){
        $profileimage = $request->file('profileimage');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($profileimage)->resize(300, 300)->save( public_path('uploads/profileimage/' . $filename) );

        $user = Auth::user();
        $user->profileimage = $filename;
        $user->save();
    }
        return redirect()->back();
    }
    
}
