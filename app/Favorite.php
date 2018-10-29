<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Favorite extends Model
{
    protected $fillable = ['company_id', 'user_id', 'date'];

    protected $dates = ['deleted_at'];

    public function user(){
      //
      return $this->belongsTo('App\User');

    }

    public function company(){
      return $this->belongsTo('App\Company');
    }

    public static function listaModelo($paginate)
    {

      $listaModelo = DB::table('favorites')
                      ->join('users','users.id','=','favorites.user_id')
                      ->join('companies','companies.id','=','favorites.company_id')
                      ->select('favorites.date')
                      ->whereNull('favorites.deleted_at')
                      ->orderBy('favorites.id','DESC')
                      ->paginate($paginate);



      return $listaModelo;
    }
}
