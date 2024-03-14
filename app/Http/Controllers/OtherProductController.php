<?php

namespace App\Http\Controllers;

use App\Models\OtherProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class OtherProductController extends Controller
{
    function addOtherProduct(){
        return view ('addOtherProduct');
    }

    function storeOtherProduct (Request $request){
        $request->validate([
            'NamaOther' => ['required'],
            'HargaOther'=> ['required'],
            'DescriptionOther'=> ['required'],
            'FotoOther'=> ['required', 'image']
        ]);

        $filename = $request->file('FotoOther')->getClientOriginalName();
        $request->file('FotoOther')->storeAs('public/'.$filename);

        OtherProduct::create([
            'NamaOther'=> $request->NamaOther,
            'HargaOther'=> $request->HargaOther,
            'DescriptionOther' =>$request->DescriptionOther,
            'FotoOther' => $filename,
        ]);

        return redirect('/');
    }
    function readProductDetail($id){
        $OtherProduct = OtherProduct::find($id);
        return view('productDetailOther', compact('OtherProduct'));
    }

    function edit ($id){
        $OtherProduct = OtherProduct::find($id);
        return view('editOtherProduct', compact('OtherProduct'));
    }

    function update(Request $request, $id){
        $request->validate([
            'NamaOther' => ['required'],
            'HargaOther'=> ['required'],
            'DescriptionOther' => ['required'],
            'FotoOther'=> ['required', 'image']
        ]);

        $filename = $request->file('FotoOther')->getClientOriginalName();
        $request->file('FotoOther')->storeAs('public/'.$filename);

        OtherProduct::find($id)->update([
            'NamaOther'=> $request->NamaOther,
            'HargaOther'=> $request->HargaOther,
            'DescriptionOther' =>$request->DescriptionOther,
            'FotoOther' => $filename,
        ]);

        return redirect('/');
    }

    function delete($id){
        $OtherProduct = OtherProduct::find($id);
        OtherProduct::destroy($id);
        Storage::delete('/public'.'/'.$OtherProduct->FotoOther);
        return redirect ('/');
    }
}
