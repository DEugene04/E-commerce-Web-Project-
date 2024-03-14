<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\NewProduct;
use App\Models\OtherProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaleController extends Controller
{
    function add (){
        return view ('addBaju');
    }

    function store (Request $request){
        $request->validate([
            'Nama' => ['required'],
            'Harga'=> ['required'],
            'Diskon'=> ['required'],
            'Foto'=> ['required', 'image']
        ]);

        $filename = $request->file('Foto')->getClientOriginalName();
        $request->file('Foto')->storeAs('public/'.$filename);

        Sale::create([
            'Nama'=> $request->Nama,
            'Harga'=> $request->Harga,
            'Diskon' =>$request->Diskon,
            'Description' => $request->Description,
            'Foto' => $filename,
        ]);

        return redirect('/');
    }

    function read(){
        $sale = Sale::all();
        $NewProduct = NewProduct::all();
        $OtherProduct = OtherProduct::all();
        return view ('welcome', compact('sale', 'NewProduct', 'OtherProduct'));
    }

    function readProductDetail($id){
        $sale = Sale::find($id);
        return view('productDetailSale', compact('sale'));
    }

    function readAdmin(){
        return view('adminPanel');
    }

    function readAdminSale(){
        return view('adminPanelSale');
    }

    function edit ($id){
        $sale = Sale::find($id);
        return view('editBaju', compact('sale'));
    }

    function update(Request $request, $id){
        $request->validate([
            'Nama' => ['required'],
            'Harga'=> ['required'],
            'Diskon'=> ['required'],
            'Description' => ['required'],
            'Foto'=> ['required', 'image']
        ]);

        $filename = $request->file('Foto')->getClientOriginalName();
        $request->file('Foto')->storeAs('public/'.$filename);

        Sale::find($id)->update([
            'Nama'=> $request->Nama,
            'Harga'=> $request->Harga,
            'Diskon' =>$request->Diskon,
            'Description' =>$request->Description,
            'Foto' => $filename,
        ]);

        return redirect('/');
    }

    function delete($id){
        $sale = Sale::find($id);
        Sale::destroy($id);
        Storage::delete('/public'.'/'.$sale->Foto);
        return redirect ('/');
    }
}
