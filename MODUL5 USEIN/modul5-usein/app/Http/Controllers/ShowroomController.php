<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
        $showrooms = Showroom::all();
        return view('ListCar-Usein', ['showrooms' => $showrooms]);
    }

    public function detail($id) {
        $detail_mobil = Showroom::where('id', $id)->get();
        return view('Detail-Usein', ['detail_mobil' => $detail_mobil]);
    }

    public function edit($id) {
        $edit_mobil = Showroom::where('id', $id)->get();
        return view('Edit-Usein', ['edit_mobil' => $edit_mobil]);
    }

    public function update(Request $request, $id) {
        $update = Showroom::find($id);

        if ($request->gambar) {
            $foto_mobil_baru = $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('asset'), $foto_mobil_baru);
        } else {
            $foto_mobil_baru = $update->image;
        }
        $update->name = $request->nama_mobil;
        $update->owner = $request->nama_pemilik;
        $update->brand = $request->merk;
        $update->purchase_date = $request->tgl_beli;
        $update->description = $request->deskripsi;
        $update->image = $foto_mobil_baru;
        $update->status = $request->status_bayar;
        $update->save();
        return redirect('/my-car');
    }

    public function delete($id) {
        $delete_mobil = Showroom::where('id', $id)->delete();
        $showrooms = Showroom::all();
        return view('ListCar-Usein', ['showrooms' => $showrooms]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function add(Request $request)
    {   
        $data_gambar = $request->file('gambar');
        $data_gambar->move(public_path('asset'), $data_gambar->getClientOriginalName());
        
        $store = new Showroom;
        $store->name = $request->nama_mobil;
        $store->owner = $request->nama_pemilik;
        $store->brand = $request->merk;
        $store->purchase_date = $request->tgl_beli;
        $store->description = $request->deskripsi;
        $store->image = $request->gambar->getClientOriginalName();
        $store->status = $request->status_bayar;
        $store->save();
        return redirect('/my-car');
    }
}
