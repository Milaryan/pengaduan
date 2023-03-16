<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexlogin()
    {
        $data['judul'] = 'AP2M - Login';

        return view('logreg.login',$data);
    }
    public function indexregis()
    {
        $data['judul'] = 'AP2M - Registrasi';

        return view('logreg.regis',$data);
    }

    public function authenticate(Request $request){
        try {
            $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);
            
            $masyarakat = Masyarakat::where('username', $request->username)->first();
            
            if ($masyarakat) {
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->intended('/masyarakat/home');
                    }
            }else {
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    if (Auth::user()->level == 'admin') {
                        return redirect()->with('status', 'success')->with('message', 'Selamat Datang '.Auth::user()->nama_user)->intended('/dashboard');
                    }else{
                        return redirect()->intended('/user-pages');
                    }
                }
            }
            
            return back()->withInput()->with('status', 'error')->with('message', 'Email atau Password Salah');
        } catch (\Throwable $th) {
            return back()->withInput()->with('status', 'error')->with('message', $th->getMessage());
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'success')->with('message', 'Berhasil Logout');
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
        }//
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
