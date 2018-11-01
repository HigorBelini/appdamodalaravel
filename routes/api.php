<?php

use Illuminate\Http\Request;
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
	
	$companies = DB::table('companies')
				->select('id', 'socialname', 'fantasyname', 'number', 'shopfacade','logo', 'latitude', 'longitude', 'industry', 'descriptive', 'keywords', 'date','user_id', 'url')
				->whereNull('deleted_at')
                ->orderBy('fantasyname','ASC')
                ->get();

	foreach ($companies as $key => $company) {
		$company->logo = asset($company->logo);
		$company->shopfacade = asset($company->shopfacade);
	}

	return $companies;
});

Route::get('/promotions', function (Request $request) {

	$promotions = DB::table('promotions')
				  ->select('id','company_id','name', 'startdate', 'finaldate','descriptive' ,'user_id', 'created_at', 'updated_at', 'promotionimage', 'logocompany')
				  ->whereNull('deleted_at')
				  ->orderBy('finaldate','ASC')
				  ->get();

	foreach ($promotions as $key => $promotion) {
		$promotion->promotionimage = asset($promotion->promotionimage);
		$promotion->company_id = Company::find($promotion->company_id)->socialname;
		$promotion->logocompany = asset($promotion->logocompany);
	}
	return $promotions;
});

Route::middleware('auth:api')->post('/promotionregistration', function (Request $request) {
   $user = $request->user();
   $data = $request->all();
   $date = date('Y-m-d H:i:s');
   $promotion = Promotion::find($data);

   foreach ($promotion as $key => $value) {
     $userpromotion = new UserPromotion;
	 $userpromotion->promotion_id = $value->id;
	 $userpromotion->promotion_name = $value->name;
	 $userpromotion->promotion_startdate = $value->startdate;
	 $userpromotion->promotion_finaldate = $value->finaldate;
	 $userpromotion->promotion_descriptive = $value->descriptive;
	 $userpromotion->promotion_promotionimage = $value->promotionimage;
	 $userpromotion->promotion_logocompany = $value->logocompany;
	 $userpromotion->user_id = $user->id;
	 $userpromotion->date = $date;
	 $userpromotion->save();
	 $json = UserPromotion::all();
  }
   return $json;
});

   Route::middleware('auth:api')->get('/promotionregistration', function (Request $request) {
   $user = $request->user();
   return $user->userpromotions;
});



Route::middleware('auth:api')->post('/favorites', function (Request $request) {
   $user = $request->user();
   $data = $request->all();
   $date = date('Y-m-d H:i:s');
   $company = Company::find($data);

   foreach ($company as $key => $value) {
    $favorite = new Favorite;
    $favorite->company_id = $value->id;
    $favorite->company_socialname = $value->socialname;
    $favorite->companies_fantasyname = $value->fantasyname;
    $favorite->companies_number = $value->number;
    $favorite->companies_shopfacade = $value->shopfacade;
    $favorite->companies_logo = $value->logo;
    $favorite->companies_latitude = $value->latitude;
    $favorite->companies_longitude = $value->longitude;
    $favorite->companies_industry = $value->industry;
    $favorite->companies_descriptive = $value->descriptive;
    $favorite->url = $value->url;
    $favorite->user_id = $user->id;
    $favorite->date = $date;
    $favorite->save();
    $json = Favorite::all();
  }

   return $json;
});

   Route::middleware('auth:api')->get('/favorites', function (Request $request) {
   $user = $request->user();
   return $user->favorites;
});

Route::middleware('auth:api')->get('/promotionsuserlist', function (Request $request) {
    $user = $request->user();


    $userpromotions = $user->userpromotions()->orderBy('date','DESC')->get();

    foreach ($userpromotions as $key => $userpromotion) {
		$userpromotion->promotion_promotionimage = asset($userpromotion->promotion_promotionimage);
		$userpromotion->promotion_logocompany = asset($userpromotion->promotion_logocompany);
	}

    return $userpromotions;
    /*$userpromotions = DB::table('userspromotions')
                      ->join('users','users.id','=','userspromotions.user_id')
                      ->join('promotions','promotions.id','=','userspromotions.promotion_id')
                      ->select('users.id', 'users.name','users.email','users.city', 'users.uf', 'users.gender', 'users.datebirth', 'users.profileimage', 'userspromotions.id', 'userspromotions.promotion_id', 'userspromotions.user_id', 'userspromotions.date','userspromotions.name', 'promotions.id', 'promotions.company_id', 'promotions.name', 'promotions.startdate', 'promotions.finaldate', 'promotions.descriptive', 'promotions.user_id', 'promotions.promotionimage', 'promotions.logocompany')
                      ->whereNull('userspromotions.deleted_at')
                      ->orderBy('userspromotions.date','DESC')
                      ->get();
    return $userpromotions;*/

});


Route::middleware('auth:api')->get('/favoriteuser', function (Request $request) {
    $user = $request->user();
    $favorites = $user->favorites()->orderBy('date','DESC')->get();

    foreach ($favorites as $key => $favorite) {
		$favorite->companies_logo = asset($favorite->companies_logo);
		$favorite->companies_shopfacade = asset($favorite->companies_shopfacade);
	}

	return $favorites;
});

Route::get('/promotions', function (Request $request) {

	$promotions = DB::table('promotions')
				  ->select('id','company_id','name', 'startdate', 'finaldate','descriptive' ,'user_id', 'created_at', 'updated_at', 'promotionimage', 'logocompany')
				  ->whereNull('deleted_at')
				  ->orderBy('finaldate','ASC')
				  ->get();

	foreach ($promotions as $key => $promotion) {
		$promotion->promotionimage = asset($promotion->promotionimage);
		$promotion->company_id = Company::find($promotion->company_id)->socialname;
		$promotion->logocompany = asset($promotion->logocompany);
	}
	return $promotions;
});

Route::post('/promotionscompany', function (Request $request) {

	$data = $request->all();

	$promotions = DB::table('promotions')
				  ->join('companies','companies.id','=','promotions.company_id')
				  ->select('promotions.id','promotions.company_id','promotions.name', 'promotions.startdate', 'promotions.finaldate','promotions.descriptive' ,'promotions.user_id', 'promotions.created_at', 'promotions.updated_at', 'promotions.promotionimage', 'promotions.logocompany')
				  ->whereNull('promotions.deleted_at')
				  ->where('promotions.company_id', '=', $data)
				  ->orderBy('finaldate','ASC')
				  ->get();

	//$companies = Company::find($data);
	return $promotions;

});

/*Route::middleware('auth:api')->get('/users', 'UserController@users');
Route::middleware('auth:api')->get('/user', 'UserController@user');
Route::middleware('auth:api')->put('/user', 'UserController@atualiza');
Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

Route::get('/companies', 'CompaniesController@lista');
Route::get('/promotions', 'PromotionsController@lista');

Route::middleware('auth:api')->post('/promotionregistration', 'UsersPromotionsController@cadastrospromocoes');
Route::middleware('auth:api')->get('/promotionregistration', 'UsersPromotionsController@listacadastrospromocoes');
Route::middleware('auth:api')->get('/promotionsuserlist', 'UsersPromotionsController@promotionsuserlist');

Route::middleware('auth:api')->post('/favorites', 'FavoritesController@cadastrofavorito');
Route::middleware('auth:api')->get('/favorites', 'FavoritesController@listafavoritos');
Route::middleware('auth:api')->get('/favoriteuser', 'FavoritesController@listafavoritosusuario');*/

