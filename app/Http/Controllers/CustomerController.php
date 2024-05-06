<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customer');
    }

    public function store(Request $request)
    {
       echo "<pre>" ;
       print_r($request->all());

       //laravel vitra model ko through chalni wala insert querty
       $customer = new Customer;
       $customer->name = $request['name'];
       $customer->email = $request['email'];
       $customer->gender = $request['gender'];
       $customer->address = $request['address'];
       $customer->district = $request['district'];
       $customer->country = $request['country'];
       $customer->dob = $request['dob'];
       $customer->name = $request['name'];
       $customer->password = md5($request['password']);
       $customer->save();


       return redirect('/customer/view');

    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function register(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'confirm_password'=>'required'
            ]
            );
        // echo"<pre>";
        //  print_r($request->all());
    }
}
