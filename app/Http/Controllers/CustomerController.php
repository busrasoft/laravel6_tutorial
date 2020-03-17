<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Pizza;
use App\Work;

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

        // $customer = Customer::firstOrNew([   //bu metod eger kayit varsa aynisini olusturmaz, kayidetmez
        //     'ContactTitle' => 'Contact bir',
        //     'ContactName' => 'Contact busra',
        // ]);
        // if($customer->save()){
        // echo 'var';
        //      }
       
        // return 'basarili';

        // $customer =Customer :: find(1); //id si 1 olan datayi update eder
        // $customer -> ContactTitle ='calm down';
        // $customer -> ContactName ='care';
        // if($customer->save()){
        //         return 'basarili';
        //     }

        // $customer =Customer :: where('id',1)->update([ //id si 1 olan datayi update eder
        //     'ContactTitle' => 'couch',
        //     'ContactName' => 'couch',
        // ]);

        // $customer =Customer :: find(5); //id 5 olan datayi sildik
        // $customer -> delete();

       // $customer =Customer :: where('id',4) -> delete(); //id 4 olan datayi sildik
    
         //   Customer :: destroy(3);  //id 3 olan datayi sildik

        //  Work :: where('id',2)->delete(); //softdelete metodu kullanildi veri frontendten silindi ama veritabaninda hala mevcut.
        
        //SoftDeletes
            // $work = Work::all();
            // foreach($work as $key)
            // {
            //  echo $key -> work_must."<br>";
            // }

            //SoftDeletes ile hepsini gosterme
            // $work = Work::withTrashed()->get();
            // foreach($work as $key)
            // {
            //  echo $key -> work_must."<br>";
            // }
    
            //sadece SoftDeletes ile silinenleri gosterme
            // $work = Work::onlyTrashed()->get();
            // foreach($work as $key)
            // {
            //  echo $key -> work_must."<br>";
            // }
    
            //SoftDeletes silinenleri geri getirme
            $work = Work::withTrashed()->restore();
           
    
    
        }
}