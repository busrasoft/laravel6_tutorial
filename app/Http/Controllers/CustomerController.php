<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Pizza;

class CustomerController extends Controller
{
    public function index(){
    // $customer = new Customer;
    // $customer->ContactTitle='ahead';
    // $customer->ContactName='aim';
    // if($customer->save()){
    //     return 'basarili';
    // }

    // Customer::create([
    //         'ContactTitle' => 'Contact bir',
    //         'ContactName' => 'Contact busra',
    //     ]);

        //  Customer::firstOrCreate([   //bu metod eger kayit varsa aynisini olusturmaz, kayit yoksa olusturur
        //     'ContactTitle' => 'Contact bir',
        //     'ContactName' => 'Contact busra',
        // ]);

        $customer = Customer::firstOrNew([   //bu metod eger kayit varsa aynisini olusturmaz, kayidetmez
            'ContactTitle' => 'Contact bir',
            'ContactName' => 'Contact busra',
        ]);
        if($customer->save()){
        echo 'var';
             }
       
        return 'basarili';

    }
}
