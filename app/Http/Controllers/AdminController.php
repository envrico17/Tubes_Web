<?php

namespace App\Http\Controllers;

use App\Models\Sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateSampah;
use Illuminate\Support\Facades\DB;
Use App\Http\Requests\AdminSampah;
class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        $item = Sampah::all();
        return view('pages.admin.index',compact('user'))->with(['item'=>$item]);
    }
    public function create(){
        return view('pages.admin.create');
    }
    public function store(AdminSampah $request){
        $validatedData = $request->validated();
        $sampah = new Sampah();
        $sampah->kode_sampah = $validatedData['kode_sampah'];
        $sampah->jenis_sampah = $validatedData['jenis_sampah'];
        $sampah->nama_penyetor = $validatedData['nama_penyetor'];
        $sampah->jumlah_sampah = $validatedData['jumlah_sampah'];
        $sampah->alamat = $validatedData['alamat'];
        $sampah->save();
        return redirect()->route('admin.index');
    }
    public function dashboard(){
        $sampah_belum_terbeli = Sampah::where('terbeli','0')->count();
        $sampah_terbeli = Sampah::where('terbeli','1')->count();
        $total_sampah = Sampah::count();
        return view('pages.admin.dashboard')->with([
            'sampah_belum_terbeli' => $sampah_belum_terbeli,
            'sampah_terbeli' => $sampah_terbeli,
            'total_sampah' => $total_sampah
        ]);
    }
    public function edit(Sampah $item){
        return view('pages.admin.edit',['item'=>$item]);
    }
    public function update(Request $request, Sampah $sampah){
        $validatedData = $request->validate([
                'kode_sampah' => 'size:4|unique:sampahs,kode_sampah,'.$sampah->id,
                'jenis_sampah' => 'required',
                'nama_penyetor' => 'required',
                'jumlah_sampah' =>'required|integer',
                'ras' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required'
        ]);
        $sampah->update($validatedData);
        return redirect()->route('admin.index');
    }
    public function destroy(Sampah $item){
        $item->delete();
        return redirect()->route('admin.index');
    }
    public function listPlastik(){
        $item = DB::select("select * from sampahs where jenis_sampah = 'Plastik'");
        return view('pages.admin.index')->with(['item'=>$item]);
    }
    public function listOrganik(){
        $item = DB::select("select * from sampahs where jenis_sampah = 'Organik'");
        return view('pages.admin.index')->with(['item'=>$item]);
    }
}
