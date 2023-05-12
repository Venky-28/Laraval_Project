<?php

namespace App\Http\Controllers;
 use App\Models\customer;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function book()
    {
        $customers = Customer::get();
        return view('book',compact('customers'));
    }

    public function add(Request $request)
    {
        $validationData = $request->validate([
            'book_name' => 'required',
            'customer' => 'required',
            'email' => 'required'
        ]);

        $customer = Customer::create([
            'book_name' => $request->book_name,
            'customer' => $request->customer,
            'email' => $request->email,
        ]);

        
        return back();
    }

    public function edit($id)
    {
        $customer =  Customer::find($id);
        return view('edit',compact('customer'));
    }

    public function update(Request $request)
    {
        $customer = Customer::find($request->id);

        $customer = Customer::create([
            'book_name' => $request->book_name,
            'customer' => $request->customer,
            'email' => $request->email,
        ]);

        return 'Customer details updated';
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return back();
    }

}
