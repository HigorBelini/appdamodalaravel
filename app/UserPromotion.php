<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class UserPromotion extends Model
{
    //use SoftDeletes;
	 
    protected $table = "userspromotions";

    protected $fillable = ['promotion_id', 'user_id', 'date'];
    
    //protected $dates = ['deleted_at'];

    public static function listaModelo($paginate)
    {

      $listaModelo = DB::table('userspromotions')
                      ->join('users','users.id','=','userspromotions.user_id')
                      ->join('promotions','promotions.id','=','userspromotions.promotion_id')
                      ->select('userspromotions.date')
                      ->whereNull('userspromotions.deleted_at')
                      ->orderBy('userspromotions.id','DESC')
                      ->paginate($paginate);



      return $listaModelo;
    }

    public function user(){
      //
      return $this->belongsTo('App\User');

    }

    public function promotion(){
      return $this->belongsTo('App\Promotion');
    }
}
