<?php

namespace App\Http\Controllers;

use App\Signal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignalController extends Controller
{
    private $signal;
    public function __construct(Signal $signal)
    {
        $this->signal = $signal;
    }
    public function index(){
        return view('signal.index');
    }
    public function create(){
        return view('signal.add');
    }
    public function store(Request $request){
        $this->signal->create ([
            'user_id' => 7474,
            'strategies_id' => $request->signal,
            'name' => $request->name_signal,
        ]);
        return redirect()->route('signals.create');
    }
}
