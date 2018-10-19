<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\User;

class UsuariosController extends Controller
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
            ["titulo"=>"Usuários","url"=>""]
        ]);

        /*$listaimagems = json_encode([
          ["id"=>1,"nome"=>"Veterinária pequeno porte","Carga horária"=>"Carga horária","Data"=>"Data"],
          ["id"=>2,"nome"=>"Manutenção de hardware","Carga horária"=>"Carga horária","Data"=>"Data"],

        ]);*/

         $listaModelo = User::select('id','name')->paginate(5);

        return view('administrador.usuarios.index', compact('listaMigalhas','listaModelo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = $request->all();
        $validacao = \Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }

        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $request->user();
        $data = $request->all();

        if(isset($data['password']) && $data['password'] != ""){
        $validacao = \Validator::make($data,[
         'name' => 'required|string|max:255',
         'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($id)],
         'password' => 'required|string|min:6',
        ]);
        $data['password'] = bcrypt($data['password']);
        }else{
            $validacao = \Validator::make($data,[
         'name' => 'required|string|max:255',
         'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($id)],
        ]);
            unset($data['password']);
        }

        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }


        User::find($id)->update($data);
        $user->token = $user->createToken($user->email)->accessToken;
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         User::find($id)->delete();
        return redirect()->back();
    }


    /*
    //API TESTE

    public function mostrar(Request $request){
        return User::all();
    }

    public function mostrarcomtoken(Request $request){
        $user = $request->user();
        $user->token = $user->createToken($user->email)->accessToken;
        return $user;
    }

    public function editausuario (Request $request){
        $user = $request->user();
        $data = $request->all();

    if(isset($data['password']) && $data['password'] != ""){


      $validacao = Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($user->id)],
          'password' => 'required|string|min:6',
      ]);

      if($validacao->fails()){
        return $validacao->errors();
      }

      $data['password'] = bcrypt($data['password']);

    }elseif(isset($data['password']) && $data['password'] == ""){

      unset($data['password']);

      $validacao = Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($user->id)]
      ]);

      if($validacao->fails()){
        return $validacao->errors();
      }

    }else{
      $validacao = Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($user->id)]
      ]);

      if($validacao->fails()){
        return $validacao->errors();
      }
    }

    $user->update($data);
    $user->token = $user->createToken($user->email)->accessToken;
    return $user;
    }

    public function novousuario (Request $request){
        $data = $request->all();


    $validacao = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

    if($validacao->fails()){
        return $validacao->errors();
    }

    $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    $user->token = $user->createToken($user->email)->accessToken;

    return $user;
    }

    public function loginusuario (Request $request){
        $validacao = Validator::make($request->all(), [
        'email' => 'required|string|email|max:255',
        'password' => 'required|string',
    ]);

    if($validacao->fails()){
      return $validacao->errors();
    }

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication passed...
        $user = Auth()->user();
        $user->token = $user->createToken($user->email)->accessToken;
        return $user;
    }else{
      return false;
    }
    }
    */
}
