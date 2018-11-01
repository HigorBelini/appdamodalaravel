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

class PromotionsController extends Controller
{
    public function lista(request $request){
    	
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
    }
}
