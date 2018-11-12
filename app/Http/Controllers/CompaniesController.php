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

class CompaniesController extends Controller
{
	public function lista(request $request){
		
	$companies = DB::table('companies')
			->select('id', 'socialname', 'fantasyname', 'number', 'shopfacade','logo','latitudeandlongitude', 'industry', 'descriptive', 'keywords', 'date','user_id', 'url')
			->whereNull('deleted_at')
            ->orderBy('fantasyname','ASC')
            ->get();

	foreach ($companies as $key => $company) {
		$company->logo = asset($company->logo);
		$company->shopfacade = asset($company->shopfacade);
	}

	return $companies;
     }
}
