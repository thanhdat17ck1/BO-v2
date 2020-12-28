<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    protected $fillable = ['user_id','names','profit','stoploss'];
    //protected $table = 'strategies';
}
