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
        $customer = new Customer();
        $title = "Customer Registration";
        $data = compact('url','title','customer');
        return view('customer')->with($data);
    }

    public function store(Request $request)
    {
        
       

       //laravel vitra model ko through chalni wala insert querty
       $customer = new Customer;
       $customer->name = $request['name'];
       $customer->email = $request['email'];
       $customer->gender = $request['gender'];
       $customer->address = $request['address'];
       $customer->district = $request['district'];
       $customer->country = $request['country'];
       $customer->dob = $request['dob'];
       $customer->password = md5($request['password']);
       $customer->save();


       return redirect('/customer');

    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
            if($search !=""){
                //where clause
                $customers =Customer::where('name','like',"%$search%")->orWhere('email','like',"%$search%")->get();
            }else{
               $customers = Customer::paginate(15); 
            }
        $data = compact('customers','search');
        return view('customer-view')->with($data);
    }

    public function trash(){
        $customers= Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }

    public function submit(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'confirm_password'=>'required|same:password'
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

    public function restore($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->restore();
        }
        return redirect('customer');
    }

    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->forceDelete();
        }
        return redirect()->back();
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
