<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\product;
use App\users;
use App\order;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::get();
        
        return view('index')->with('products',$products);
    }

    public function support()
    {
        return view('support');
    }

    public function contact()
    {
        return view('contact');
    }

    public function collection()
    {
        return view('collection');
    }

    public function order()
    {
        $orders = order::get();
        return view('order')->with('orders',$orders);
    }

     public function updateProduct($id)
    {   
        $products = product::findOrFail($id);
    
        return view('admin/product/update')->with('products',$products);
    }


    public function orders($id)
    {
        $products = product::findOrFail($id);
        return view('orders')->with('products',$products);
    }



    public function orderStatus()
    {
        $orders = order::where('firstName',Auth::user()->firstName )->get();
        return view('orderStatus')->with('orders',$orders);
    }

    public function addOrder(Request $request)
    {
        $store = new order;
        $store->productCode = $request->Code;
        $store->productName = $request->name;
        $store->price = $request->price;
        $store->firstName = $request->firstName;
        $store->lastName = $request->lastName;
        $store->Address = $request->address;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->date = date("d/m/Y");
        $store->status = '0';
        $store->save();
        \Session::flash('flash_message1','Insert Order Successfully');   
        return redirect('/');
    }    


    public function login()
    {
        return view('/logins');
    }

    public function regis()
    {
        return view('registers');
    }

    public function addregis(Request $request)
    {
        $store = new users;
        $store->firstName = $request->firstName;
        $store->lastName = $request->lastName;
        $store->email = $request->email;
        $store->password = Hash::make($request->input('password'));
        $store->status = '0';
        $store->save();
        \Session::flash('flash_message1','Register Successfully');   
        return redirect('/logins');
    }

}
