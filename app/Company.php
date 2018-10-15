<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Company extends Model
{
    use SoftDeletes;
	
    protected $fillable = ['socialname', 'fantasyname', 'number', 'logo', 'shopfacade', 'latitude', 'longitude', 'industry', 'descriptive', 'keywords', 'date'];
    
    protected $dates = ['deleted_at'];

    public function promotions(){
      return $this->hasMany('App\Promotion');
    }

    public static function listaModelo($paginate)
    {

      $listaModelo = DB::table('companies')
                      //->join('users','users.id','=','artigos.user_id')
                      ->select('companies.fantasyname')
                      ->whereNull('companies.deleted_at')
                      ->orderBy('companies.id','DESC')
                      ->paginate($paginate);



      return $listaModelo;
    }
}

