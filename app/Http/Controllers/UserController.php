<?php

namespace App\Http\Controllers;
use App\Models\Sampah;
use App\Http\Requests\CreateSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;
class UserController extends Controller

{
    public function index(){
        $items = Sampah::all();
        return view('pages.user.home')->with(['items' => $items]);
    }
    public function create(){
        return view('pages.user.create');
    }
    public function beli(){
        return view('pages.user.sampah');
    }
    public function list(){
        return view('pages.user.list');
    }
    public function storeCreate(CreateSampah $request){
        $validatedData = $request->validated();
        $sampah = new Sampah();
        $sampah->kode_sampah = Str::random(4);
        $sampah->jenis_sampah = $validatedData['jenis_sampah'];
        $sampah->nama_penyetor = $validatedData['nama_penyetor'];
        $sampah->jumlah_sampah = $validatedData['jumlah_sampah'];
        $sampah->alamat = $validatedData['alamat'];
        $sampah->save();
        return redirect()->route('user.beli');
    }
    public function terbeli(Request $request, Sampah $sampah){
        $validateData = $request->validate([
            'terbeli' => 'required'
        ]);
        $sampah->update($validateData);
        return redirect()->route('user.beli');
    }
    public function tes(CreateSampah $item){
        return view('pages.user.create_pic',);
    }
    public function show(Sampah $item){

        return view('pages.user.sampah')->with('item',$item);
    }
}
