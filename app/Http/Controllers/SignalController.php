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
        
        $signals = $this->signal->latest()->paginate(5);
        //temp = $signals->selection;
        //dd($this->signal->latest()->paginate());
        return view('signal.index',compact('signals'));
    }
    public function create(){
        return view('signal.add');
    }
    public function store(Request $request){//return $request->all();
        //$param = $request->all();
        // $turn = [           
        //     json_encode($param{'selection'}),
        //     json_encode($param{'bet_amount'}),
        // ];
        // $request->validate([
        //     'name' => 'required'
        // ],[
        //     'name.required' => 'Không được để trống'
        // ]);
        $data = [];
        foreach($request->selection as $key => $valSel){
                $data[] =  [
                    'selection' => $valSel,
                    'bet_amount' => $request->bet_amount[$key]
                ];
        }
        
       $this->signal->create ([
           'user_id' => 7474,
           'name' => $request->name,
           'signal_pattern' => $request->signal_pattern,
           'number_of_turns' => $request->number_of_turns,
           'selection' => json_encode($data),
           'option_win' => $request->option_win,
           'option_loss' => $request->option_loss
       ]);
       return redirect()->route('signals.create');
        //dd($request->all());
    }
    public function edit($id){
        $signal = $this->signal->find($id);
        return view('signal.edit',compact('signal'));
    }
    public function update($id, Request $request){
        $data = [];
        foreach($request->selection as $key => $valSel){
                $data[] =  [
                    'selection' => $valSel,
                    'bet_amount' => $request->bet_amount[$key]
                ];
        }
        $signal = $this->signal->find($id)->update([
            'name' => $request->name,
           'signal_pattern' => $request->signal_pattern,
           'number_of_turns' => $request->number_of_turns,
           'selection' => json_encode($data),
           'option_win' => $request->option_win,
           'option_loss' => $request->option_loss
        ]);

        return redirect()->route('signals.index');

    }
    public function delete($id){
        $this->signal->find($id)->delete();
        return redirect()->route('signals.index');//dùng redirect để xử lý chuyển trang
    }
}
