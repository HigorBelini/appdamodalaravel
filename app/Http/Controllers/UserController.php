<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Validation\Rule;
use App\Company;
use App\Promotion;
use App\UserPromotion;
use App\Favorite;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(request $request){
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
        'password' => bcrypt($data['password']),
    ]);

    $user->token = $user->createToken($user->email)->accessToken;

    return $user;
    }

    public function login(request $request){

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

	public function user(request $request){
		$user = $request->user();
   		$user->token = $user->createToken($user->email)->accessToken;
    	return $user;
    }

    public function users(request $request){
    	return User::all();
    } 

    public function atualiza(request $request){
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

      $data['password'] = Hash::make($data['password']);

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
   
    
}
