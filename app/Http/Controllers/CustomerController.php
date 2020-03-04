<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
    $customer = new Customer;
    $customer->ContactTitle='ahead';
    $customer->ContactName='aim';
    if($customer->save()){
        return 'basarili';
    }
    }
}
