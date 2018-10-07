<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Support\Facades\DB;

class Visit extends Model
{
     use SoftDeletes;
	
    protected $fillable = ['date', 'latitude', 'longitude', 'keyword', 'company_id', 'user_id'];
    
    protected $dates = ['deleted_at'];
}
