<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\pengaduan;
use App\Models\petugas;
use App\Models\tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    protected $direktori = 'admin';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $data['judul'] = 'AP2M - Dashboard';
        $data['menu'] = 'Dashboard';
        $data['masyarakat'] = Masyarakat::count();
        $data['petugas'] = petugas::where('level', 'petugas')->count();
        $data['pengaduan'] = pengaduan::count();
        $data['tanggapan'] = tanggapan::count();

        return view($this->direktori.'.dashboard', $data);
    }

    public function index()
    {
        $data['judul'] = 'AP2M - Petugas';
        $data['menu'] = 'Petugas';
        $data['petugas'] = petugas::where('level', 'petugas')->get();

        return view($this->direktori.'.petugas.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul'] = 'AP2M - Petugas';
        $data['menu'] = 'Petugas';

        return view($this->direktori.'.petugas.add', $data);
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
                'nama_petugas' => 'required',
                'username' => 'required|unique:petugas',
                'telp' => 'required',
                'alamat' => 'required',
                'password' => 'required',
                'level' => 'required'
            ]);

            $validate['password'] = bcrypt($validate['password']);
            $validate['level'] = 'petugas';


            petugas::create($validate);
            return redirect()->route('petugas')->with('status', 'success')->with('message', 'Berhasil ditambahkan');
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
        $data['judul'] = 'AP2M - Petugas';
        $data['menu'] = 'Petugas';
        $data['petugas'] = petugas::where('id_petugas', $id)->first();

        return view($this->direktori.'.petugas.edit', $data);
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
                'nama_petugas' => 'required',
                'telp' => 'required',
                'alamat' => 'required',
            ]);

            $petugas = petugas::where('id_petugas', $id)->first();

            if (!empty($request->password)) {
                $validate['password'] = bcrypt($request->password);
            }else{
                $validate['password'] = $petugas->password;
            }
            if ($request->username != $petugas->username) {
                $request->validate(['username' => 'required|unique:petugas']);
            }

            $petugas->update();
            return redirect()->route('petugas')->with('status', 'success')->with('message', 'Berhasil diedit');
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
        $petugas = petugas::where('id_petugas', $id)->first();
        if(!empty($petugas)){
            $petugas->delete();

            return redirect()->back()->with('status', 'success')->with('message', 'Berhasil dihapus');
        }else{
            return redirect()->back()->with('status', 'error')->with('message', 'Gagal');
        }
    }
}
