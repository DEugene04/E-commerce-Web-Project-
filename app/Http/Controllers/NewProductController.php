<?php

namespace App\Http\Controllers;

use App\Models\NewProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class NewProductController extends Controller
{
    function addNewProduct (){
        return view ('addNewProduct');
    }

    function storenewProduct (Request $request){
        $request->validate([
            'NamaNew' => ['required'],
            'HargaNew'=> ['required'],
            'DescriptionNew'=> ['required'],
            'FotoNew'=> ['required', 'image']
        ]);

        $filename = $request->file('FotoNew')->getClientOriginalName();
        $request->file('FotoNew')->storeAs('public/'.$filename);

        NewProduct::create([
            'NamaNew'=> $request->NamaNew,
            'HargaNew'=> $request->HargaNew,
            'DescriptionNew' =>$request->DescriptionNew,
            'FotoNew' => $filename,
        ]);

        return redirect('/');
    }

    function readProductDetail($id){
        $NewProduct = NewProduct::find($id);
        return view('productDetailNew', compact('NewProduct'));
    }

    function edit ($id){
        $NewProduct = NewProduct::find($id);
        return view('editNewProduct', compact('NewProduct'));
    }

    function update(Request $request, $id){
        $request->validate([
            'NamaNew' => ['required'],
            'HargaNew'=> ['required'],
            'DescriptionNew' => ['required'],
            'FotoNew'=> ['required', 'image']
        ]);

        $filename = $request->file('FotoNew')->getClientOriginalName();
        $request->file('FotoNew')->storeAs('public/'.$filename);

        NewProduct::find($id)->update([
            'NamaNew'=> $request->NamaNew,
            'HargaNew'=> $request->HargaNew,
            'DescriptionNew' =>$request->DescriptionNew,
            'FotoNew' => $filename,
        ]);

        return redirect('/');
    }

    function delete($id){
        $NewProduct = NewProduct::find($id);
        NewProduct::destroy($id);
        Storage::delete('/public'.'/'.$NewProduct->FotoNew);
        return redirect ('/');
    }
}