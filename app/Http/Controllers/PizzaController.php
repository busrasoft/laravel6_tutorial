<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
       // $pizza=Pizza::all(); //modelden veri cekildi
      //  $pizza=Pizza::where('mushroom',1)->get(); //birdern fazla satirla kullanim 
      //  $pizza=Pizza::where('mushroom',1)->first(); //tek satir donuyorsa first kullanilir
     //   dd($pizza);
    // foreach ($pizza as $key) {
    //     return $key['mushroom'];
    // }

    $pizza= new Pizza; //
    $pizza->mushroom ='mantar';
    $pizza->parsley ='maydanoz';
    $pizza->lettuce = 'marul';
    $pizza->size = 1 ;
    $pizza->save();
    }
}
