<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Promotion extends Model
{
    use SoftDeletes;
	
    protected $fillable = ['name', 'startdate', 'finaldate', 'descriptive', 'company_id', 'promotionimage', 'logocompany'];
    
    protected $dates = ['deleted_at'];

    public function companies(){
      return $this->belongsTo('App\Company');
    }

    public static function listaModelo($paginate)
    {

      $listaModelo = DB::table('promotions')
                      //->join('users','users.id','=','promotions.user_id')
                      ->select('promotions.name')
                      ->whereNull('promotions.deleted_at')
                      ->orderBy('promotions.id','DESC')
                      ->paginate($paginate);


      return $listaModelo;
    }
}
