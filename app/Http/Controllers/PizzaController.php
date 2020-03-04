<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
       // $pizza=Pizza::all();
      //  $pizza=Pizza::where('mushroom',1)->get();
      //  $pizza=Pizza::where('mushroom',1)->first();
     //   dd($pizza);
    // foreach ($pizza as $key) {
    //     return $key['mushroom'];
    // }

    $pizza= new Pizza;
    $pizza->mushroom ='mantar';
    $pizza->parsley ='maydanoz';
    $pizza->lettuce = 'marul';
    $pizza->size = 1 ;
    $pizza->save();
    }
}
