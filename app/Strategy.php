<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    protected $fillable = ['user_id','names','investment','profit','stoploss','max_round'];
    //protected $table = 'strategies';
}
