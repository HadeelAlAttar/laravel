<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro=Product::get();
        return view('product.index',compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'price' =>'numeric|between:10,1000'
        ]);

        $dd=time().'.'.$request->image->extension();
        $request->image->storeAs('public/uploads',$dd);
        $pro= new Product;
        $pro->name=$request->name;
        $pro->price=$request->price;
        $pro->qty=$request->qty;
        $pro->imag=$dd;
        $pro->save();
        // return redirect()->back();
        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro=Product::find($id);
        return view('product.edit',compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro=Product::find($id);
        $dd="";
        if($request->hasFile('image')){
        $dd=time().'.'.$request->image->extension();
        $request->image->storeAs('public/uploads',$dd);
        if($pro->imag){
            Storage::delete('public/uploads',$pro->imag);
        }else{
            $dd=$pro->imag;
        }
        }
        $pro->name=$request->name;
        $pro->price=$request->price;
        $pro->qty=$request->qty;
        $pro->imag=$dd;
        $pro->save();

        return redirect('products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro=Product::find($id);
        $pro->delete();
        return redirect('products');

    }
}
