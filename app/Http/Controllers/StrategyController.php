<?php

namespace App\Http\Controllers;

use App\Strategy;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    private $strategy;
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }
    public function index(){
        // return view('category.index');
        $strategies = $this->strategy->latest()->paginate(5);

        return view('strategy.index',compact('strategies'));//lấy biến categories sang file khác để sử dụng
    }
//    public function index(){
//        return view('strategy.index');
//    }
    public function create(){
//        $htmlOption = $this->getCategory($parentId='');
//        return view('category.add', compact('htmlOption'));
        return view('strategy.add');
    }



    public function store(Request $request){
        $this->strategy->create ([
            'user_id' => 123,
            'names' => $request->name_stratery,
            'investment' => $request->investment,
            'profit' => $request->profit,
            'stoploss' => $request->stoploss,
            'max_round' => $request->max_round
        ]);
        return redirect()->route('strategies.create');
    }
//
//    public function getCategory($parentId){
//        $data = $this->category->all();
//        $recusive = new Recusive($data);
//        $htmlOption = $recusive->categoryRecusive($parentId);
//        return $htmlOption;
//    }
    public function edit($id){
        $strategy = $this->strategy->find($id);
        return view('strategy.edit',compact('strategy'));
    }
//
    public function update($id, Request $request){
        $strategy = $this->strategy->find($id)->update([
            'names' => $request->name_stratery,
            'investment' => $request->investment,
            'profit' => $request->profit,
            'stoploss' => $request->stoploss,
            'max_round' => $request->max_round
        ]);

        return redirect()->route('strategies.index');

    }
//
    public function delete($id){
        $this->strategy->find($id)->delete();
        return redirect()->route('strategies.index');//dùng redirect để xử lý chuyển trang
    }
}
