<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    protected $fillable = ['user_id','strategies_id','name','condition'];
}
