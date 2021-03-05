<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{  //special constructor of laravel and this will apply authorization on every single pizza action
   /* public function _construct(){
        $this->middleware('auth');
    }*/
    //
    public function index(){
        /*
        #$pizzas=Pizza::all();
        #$pizzas=Pizzz::orderBy('name','desc')->get();
        $Pizza=Pizza::where('type','hawaiian')->get()
        $Pizza=Pizza::latest()->get()
        */
        /*
        $pizza=[
            ['type'=>'hawaiian','base'=>'cheesy crust'],
            ['type'=>'volcano','base'=>'garlic crust'],
            ['type'=>'veg supreme','base'=>'thin and crispy']
            ];
            $name = request('name');
            $age = request('age');
            return view('pizzas',['pizzas' => $pizza,'name'=>$name,'age'=>$age]);
        */
        #$pizzas= Pizza::all();
        #$pizza=Pizza::orderBy('name')->get();
        #$pizzas=Pizza::where('type','hawaaian')->get();
        $pizzas=Pizza::latest()->get();
        return view('pizzas.index',[
            'pizzas' => $pizzas,
        ]);
       
    }
    public function show($id){
        $pizza=Pizza::findOrFail($id);
        return view('pizzas.show',['pizza'=>$pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        ##To print them in console
        /*
        #error_log(request('name'));
        #error_log(request('type'));
        #error_log(request('base'));
        #error_log(request('toppings'));
        */
        
        $pizza=new Pizza();
        $pizza->name=request('name');
        $pizza->type=request('type');
        $pizza->base=request('base');
        #error_log(request('toppings'));
        $pizza->toppings=request('toppings');
        
        $pizza->save();
        #new instance of Pizza model
       
        return redirect('/')->with('mssg','Thank you for order');
        #return request('toppings');
    }
    public function destroy($id){
            $pizza=Pizza::findOrFail($id);
            $pizza->delete();
            return  redirect('/pizzas');
        
    }
}
