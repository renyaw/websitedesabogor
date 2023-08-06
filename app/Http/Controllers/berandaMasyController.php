<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\userModel;
use App\Models\antreanBbmModel;
use App\Models\statusModel;
class berandaMasyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = userModel::find(Auth::user()->id);
        return view('berandaMasy',compact('query'));
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
        try {
            $ktp = $request->file('ktp_bbm');
            $foto_usaha = $request->file('foto_usaha');

            $nama_ktp = $ktp->getClientOriginalName();
            $nama_foto = $foto_usaha->getClientOriginalName();

            $extension_ktp = $ktp->getClientOriginalExtension();
            $extension_foto = $foto_usaha->getClientOriginalExtension();

            //penamaan file
            $newNama_ktp = "KTP-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_ktp;
            $newNama_foto = "Foto-".Auth::user()->nama.'-'.Carbon::now()->formatLocalized("%d%m%Y_%H%M%S").'-.'.$extension_foto;

            //penyimpanan file pada storage
            $path_ktp = Storage::putFileAs('public/ktp', $request->file('ktp_bbm'), $newNama_ktp);
            $path_kk = Storage::putFileAs('public/foto_usaha', $request->file('foto_usaha'), $newNama_foto);
            $this->validate($request,[
                'lokasi' => 'required',
                'lama_usaha' => 'required',
                'spbu' => 'required',
            ]);
            //penyimpanan file ke db
            $data = [
                'ktp_bbm' => $newNama_ktp,  
                'foto_usaha' => $newNama_foto,
                'lokasi' => $request->lokasi,
                'lama_usaha' => $request->lama_usaha,
                'spbu' => $request->spbu,
                'fk_id_user' => Auth::user()->id,
                'fk_status' =>1
            ];

            antreanBbmModel::create($data);
            return redirect('/berandaMasy')->with('berhasil', 'Berkas Berhasil diinput! Silahkan Cek Melalui Riwayat');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

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
}
