<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\pengaduan;
use App\Models\petugas;
use App\Models\tanggapan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    protected $judul = 'Home - AP2M Kota Mojokerto';
    protected $direktori = 'admin';
    protected $directory = 'masyarakat';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judul'] = $this->judul;

        return view($this->directory.'.main', $data);
    }

    public function indexadmin()
    {
        $data['judul'] = 'AP2M - Masyarakat';
        $data['menu'] = 'Masyarakat';
        $data['masyarakat'] = masyarakat::all();

        return view($this->direktori.'.masyarakat.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul'] = 'AP2M - Masyarakat';
        $data['menu'] = 'Masyarakat';

        return view($this->direktori.'.masyarakat.add', $data);
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
                'nik' => 'required|unique:masyarakat',
                'nama' => 'required',
                'username' => 'required|unique:masyarakat',
                'telp' => 'required',
                'alamat' => 'required',
                'password' => 'required'
            ]);

            $validate['password'] = bcrypt($validate['password']);


            Masyarakat::create($validate);
            return redirect()->route('masyarakat')->with('status', 'success')->with('message', 'Berhasil ditambahkan');
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
        $data['judul'] = 'AP2M - Masyarakat';
        $data['menu'] = 'Masyarakat';
        $data['masyarakat'] = masyarakat::where('nik', $id)->first();

        return view($this->direktori.'.masyarakat.edit', $data);
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
                'nik' => 'required|unique:masyarakat',
                'nama' => 'required',
                'telp' => 'required',
                'alamat' => 'required',
            ]);

            $masyarakat = Masyarakat::where('nik', $id)->first();

            if (!empty($request->password)) {
                $validate['password'] = bcrypt($request->password);
            }else{
                $validate['password'] = $masyarakat->password;
            }
            if ($request->username != $masyarakat->username) {
                $request->validate(['username' => 'required|unique:masyarakat']);
            }

            $masyarakat->update();
            return redirect()->route('masyarakat')->with('status', 'success')->with('message', 'Berhasil diedit');
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
        $masyarakat = Masyarakat::where('nik', $id)->first();
        if(!empty($masyarakat)){
            $masyarakat->delete();

            return redirect()->back()->with('status', 'success')->with('message', 'Berhasil dihapus');
        }else{
            return redirect()->back()->with('status', 'error')->with('message', 'Gagal');
        }
    }
}
