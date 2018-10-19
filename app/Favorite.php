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
}
