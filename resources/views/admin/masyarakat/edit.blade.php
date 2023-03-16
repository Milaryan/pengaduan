@extends('admin.partial.main')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">FORM EDIT {{ $menu }}</h4>
            </div>
        </div>

            <div class="panel panel-info" id="float">
                <div class="panel-heading">
                    Form Edit {{ $menu }}
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{ route('updatemasyarakat', $masyarakat->nik) }}">
                        @csrf
                        <div class="form-group">
                            <label>NIK</label>
                            <input class="form-control" type="text" placeholder="Masukkan NIK" name="nik" value="{{ old('nik') ? old('nik') : $masyarakat->nik }}"/>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Masukkan Nama Lengkap" name="nama" value="{{ old('nama') ? old('nama') : $masyarakat->nama }}"/>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" placeholder="Masukkan Username" name="username" value="{{ old('username') ? old('username') : $masyarakat->username }}"/>
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input class="form-control" type="text" placeholder="Masukkan No Telp" name="telp" value="{{ old('telp') ? old('telp') : $masyarakat->telp }}"/>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') ? old('alamat') : $masyarakat->alamat }}"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label><sup> *Masukkan Password Bila Ingin Menganti</sup>
                            <input class="form-control" type="text" placeholder="Masukkan Password" name="password" value="{{ old('password') }}"/>
                        </div>

                        <a href="{{ route('masyarakat') }}" class="btn btn-info">Kembali</a>
                        <button type="submit" class="btn btn-primary" id="btn-float">Simpan </button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
