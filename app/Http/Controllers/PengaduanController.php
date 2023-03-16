<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    protected $judul = 'Home - AP2M Kota Mojokerto';
    protected $direktori = 'admin';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judul'] = 'AP2M - Pengaduan';
        $data['menu'] = 'Pengaduan';
        $data['pengaduan'] = pengaduan::all();

        return view($this->direktori.'.pengaduan.view',$data);
    }
    public function terbaru()
    {
        $data['judul'] = 'AP2M - Pengaduan';
        $data['menu'] = 'Pengaduan';
        $data['pengaduan'] = pengaduan::where('status', '')->get();

        return view($this->direktori.'.pengaduan.view',$data);
    }
    public function proses()
    {
        $data['judul'] = 'AP2M - Pengaduan';
        $data['menu'] = 'Pengaduan';
        $data['pengaduan'] = pengaduan::where('status', 'Proses')->get();

        return view($this->direktori.'.pengaduan.view',$data);
    }
    public function selesai()
    {
        $data['judul'] = 'AP2M - Pengaduan';
        $data['menu'] = 'Pengaduan';
        $data['pengaduan'] = pengaduan::where('status', 'Selesai')->get();

        return view($this->direktori.'.pengaduan.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul'] = 'AP2M - Pengaduan';
        $data['menu'] = 'Pengaduan';

        return view($this->direktori.'.pengaduan.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            // dd($request);
            $validate = $request->validate([
                'tgl_pengaduan' => 'required',
                'nik' => 'required',
                'isi_laporan' => 'required',
                'foto' => 'nullable'
            ]);
;
            $ext_foto   = $request->foto->getClientOriginalExtension();
            $fotoname   = date('Ymdhis') .".". $ext_foto;
            $tmp_foto   = 'foto_laporan';
            $proses     = $request->foto->move($tmp_foto,$fotoname);

            if ($request->foto) {
                $validate['foto'] = $fotoname;
            }else {
                $validate['foto'] = 'Tidak Ada foto';
            }

            pengaduan::create($validate);
            return redirect()->route('pengaduan')->with('status', 'success')->with('message', 'Berhasil ditambahkan');
        }
        catch (\Throwable $th) {
            return back()->withInput()->with('status', 'error')->with('message', $th->getMessage());
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
        $data['judul'] = 'AP2M - Pengaduan';
        $data['menu'] = 'Pengaduan';
        $data['pengaduan'] = pengaduan::where('nik', $id)->first();

        return view($this->direktori.'.pengaduan.edit', $data);
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
        try {
            $validate = $request->validate([
                'nik' => 'required',
                'nama' => 'required',
                'telp' => 'required',
                'alamat' => 'required',
            ]);

            $pengaduan = pengaduan::where('nik', $id)->first();

            if (!empty($request->password)) {
                $validate['password'] = bcrypt($request->password);
            }else{
                $validate['password'] = $pengaduan->password;
            }
            if ($request->username != $pengaduan->username) {
                $request->validate(['username' => 'required|unique:pengaduan']);
            }

            $pengaduan->update();
            return redirect()->route('viewpengaduan')->with('status', 'success')->with('message', 'Berhasil diedit');
        } catch (\Throwable $th) {
            return back()->withInput()->with('status', 'error')->with('message', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = pengaduan::where('nik', $id)->first();
        if(!empty($pengaduan)){
            $pengaduan->delete();

            return redirect()->back()->with('status', 'success')->with('message', 'Berhasil dihapus');
        }else{
            return redirect()->back()->with('status', 'error')->with('message', 'Gagal');
        }
    }
}

