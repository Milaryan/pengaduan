@extends('admin.partial.main')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">FORM TAMBAH {{ $menu }}</h4>
            </div>
        </div>

            <div class="panel panel-info" id="float">
                <div class="panel-heading">
                    Form Tambah {{ $menu }}
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{ route('storepetugas') }}">
                        @csrf
                        <input type="hidden" name="level" value="petugas">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Masukkan Nama Lengkap" name="nama_petugas" value="{{ old('nama_petugas') }}"/>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" placeholder="Masukkan Username" name="username" value="{{ old('username') }}"/>
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input class="form-control" type="text" placeholder="Masukkan No Telp" name="telp" value="{{ old('telp') }}"/>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" placeholder="Masukkan Password" name="password" value="{{ old('password') }}"/>
                        </div>

                        <button type="submit" class="btn btn-info" id="btn-float">Simpan </button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
