<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Image;
use App\product;
use App\order;

class AdminController extends Controller
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
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function dashboard()
    {
        $products = product::get();
         $orders = order::get();
        return view('admin/dashboard')->with('products',$products)->with('orders',$orders);
    }
     public function product()
    {
        $products = product::get();
        return view('admin/product/product')->with('products',$products);
    }
      public function addproduct()
    {
        return view('admin/product/insert');
    }

    public function insertProduct(Request $request)
    {
        if(Input::hasFile('photo')){
            $New=Input::File('photo');
            $image = Image::make(Input::file('photo'));
            $path = public_path().'/photo/';
            $image->resize(375,432);
            $image->save($path.$New->getClientOriginalName());

        }
        $store = new product;
        $store->ImageName = $New->getClientOriginalName();
        $store->ImageSize = $New->getClientsize();
        $store->ImageType = $New->getClientMimeType();
        $store->productCode = $request->Code;
        $store->productName = $request->Name;
        $store->productDetail = $request->Detail;
        $store->productBrand = $request->brand;
        $store->productPrice = $request->Price;
        $store->save();
        \Session::flash('flash_message1','Insert Successfully');   
        return redirect('admin/product');
        
    }

    public function updateProduct($id)
    {   
        $products = product::findOrFail($id);
    
        return view('admin/product/update')->with('products',$products);
    }


    public function productUpdate($id, Request $request)
    {
        $update = product::find($id);
        $update->productCode = $request->input('Code');
        $update->productName = $request->input('Name');
        $update->productDetail = $request->input('Detail');
        $update->productBrand = $request->input('brand');
        $update->productPrice = $request->input('Price');
        $update->save(); 
        \Session::flash('flash_message2','Update Successfully');           
        return redirect()->to('admin/product');
    }



    public function deleteProduct($id)
    {
        $destroy = product::where('productID',$id)->delete();
        \Session::flash('flash_message3','Delete Successfully');   
        return redirect()->to('admin/product');
    }
   


    public function order()
    {
        $orders = order::orderBy('status', 'DESC')->get();
        return view('admin/order/order')->with('orders',$orders);
    }

    public function orderUpdate($id)
    {
        $orders = order::findOrFail($id);
        return view('admin/order/update')->with('orders',$orders);
    }

     public function updateOrder($id)
    {
        $orders = order::findOrFail($id);
        $num = Input::get('status');
        $orders->status = $num;
        $orders->save();
        \Session::flash('flash_message4','Update Successfully');
        return redirect()->to('admin/order');
    }
    
    public function deleteOrder($id)
    {
        $destroy = order::where('orderCode',$id)->delete();
        \Session::flash('flash_message6','Delete Successfully');   
        return redirect()->to('admin/order');
    }

     


    public function viewOrder($id)
    {
        $orders = order::findOrFail($id);
        return view('admin/order/view')->with('orders',$orders);
    }

}
