<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url','title');
        return view('customer')->with($data);
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


       return redirect('/customer');

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
    }

    // public function delete($id){
    //     Customer::find($id)->delete();
    //     return redirect()->back();
        
    // }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer');
    }

    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            //not found
            return redirect('customer');
        }else{
            //found
            $title = "Update Customer";
            $url = url('/customer/update')."/".$id;
            
            $data = compact('customer','url','title');
            return view('customer')->with($data);
        }
        
    }

    public function update($id, Request $request){
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->district = $request['district'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('customer'); 
    }
}
