<?php

namespace App\Http\Controllers;
use App\Models\antreanBbmModel;
use Illuminate\Support\Facades\Auth;
use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

class verifBBMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = antreanBbmModel::all();

        return view('/verifBBM',compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = antreanBbmModel::where('id_bbm',$id)->first();
        return view('/verifBBM', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download($id)
    {
        try {
            Storage::disk('local')->download('');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function diterima($id)
    {
        $id_dom = antreanBbmModel::where('id_bbm',$id)->first();
        $update = DB::table('antrean_bbm')
                    ->where('id_bbm', $id)
                    ->update(['fk_status' => 2]);
        // dd($id);
        // $id_bbm = antreanbbmModel::find($id);
        // $id_bbm->fk_status = 2;
        // $id_bbm->save();
        // dd($id_bbm);

        //pindah ke tabel bbmisili
        // $fk_id_bbm = $id_bbm->id_bbm;
        // $layananbbm = new layananbbmModel;
        // $layananbbm->fk_id_bbm = $fk_id_bbm;
        // $layananbbm->tgl_bbm = Carbon::now();
        // $layananbbm->save();

        // dd($sp_kel_bbm);
        // return $id_bbm;
        // $id_bbm->fk_status = 2;
        // $id_bbm->save();
        return redirect('/daftarPemohon');

    }

    public function ditolak($id)
    {
        $id_dom = antreanBbmModel::where('id_bbm',$id)->first();
        $update = DB::table('antrean_bbm')
                    ->where('id_bbm', $id)
                    ->update(['fk_status' => 3]);
        // $id_dom = antreanDomModel::where('id_dom',$id)->first();
        // dd($id_dom);
        // $id_dom->fk_status = 3;
        // $id_dom->save();

        return redirect('/daftarPemohon');
    }

    public function kembali($id)
    {
        $id_dom = antreanBbmModel::where('id_bbm',$id)->first();
        return redirect('/daftarPemohon');
    }
}
