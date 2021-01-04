<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    protected $fillable = ['name','signal_pattern','number_of_turns','selection','bet_amount','option_win','option_loss'];
}
