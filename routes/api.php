<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Validation\Rule;
use App\Company;
use App\Promotion;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return User::all();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    $user = $request->user();
   	$user->token = $user->createToken($user->email)->accessToken;
    return $user;
});

Route::middleware('auth:api')->put('/user', function (Request $request) {
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
});

Route::post('/register', function (Request $request) {

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
});

Route::post('/login', function (Request $request) {

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
});

Route::get('/companies', function (Request $request) {
	$companies = Company::all();
	foreach ($companies as $key => $company) {
		$company->logo = asset($company->logo);
		$company->shopfacade = asset($company->shopfacade);
	}
	return $companies;
});

Route::get('/promotions', function (Request $request) {
	$promotions = Promotion::all();

	/*$promotions = DB::table('promotions')
				  ->join('companies', 'companies.id', '=', 'promotions.company_id')
				  ->select('promotions.id','promotions.name', 'promotions.startdate', 'promotions.finaldate', 'promotions.descriptive', 'promotions.promotionimage', 'company.socialname', 'company.logo')*/

	foreach ($promotions as $key => $promotion) {
		$promotion->promotionimage = asset($promotion->promotionimage);
		$promotion->company_id = Company::find($promotion->company_id)->socialname;
		//$promotion->company_id = $promotion->companies->socialname;
		//unset($value->company);
		$promotion->logocompany = asset($promotion->logocompany);
	}

	return $promotions;
});