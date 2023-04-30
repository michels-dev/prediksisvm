<?php

namespace App\Http\Controllers;

use App\Models\Prediksi;
use Illuminate\Http\Request;

class PrediksiController extends Controller
{
    public function index(){
        $data = Prediksi::all();
        // dd($data);
        return view('vdstroke',compact('data'));
    }

    // delete data
    public function delete($id){
    $data = Prediksi::find($id);
    $data->delete();
    return redirect()->route('stroke')->with('success','Data Berhasil Di Hapus');
}
}


