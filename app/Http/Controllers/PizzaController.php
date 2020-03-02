<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $piz=Pizza::all();
        dd($piz);
    }
}
