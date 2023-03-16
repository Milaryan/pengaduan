@extends('admin.partial.main')

@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">FORM TAMBAH {{ $menu }}</h4>
                @if (session()->has('status'))
                    @if (session()->get('status') == 'succes')
                        <p>{{ session()->get('message') }}</p>
                        @else
                        <p>{{ session()->get('message') }}</p>
                    @endif
                @endif
            </div>
        </div>

            <div class="panel panel-info" id="float">
                <div class="panel-heading">
                    Form Tambah {{ $menu }}
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{ route('storepengaduan') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input class="form-control" type="date" placeholder="Masukkan Tanggal Pengaduan" name="tgl_pengaduan" value="{{ date('Y-m-d') }}"/>
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input class="form-control" type="text" placeholder="Masukkan NIK" name="nik" value="{{ old('nik') }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Isi Laporan</label>
                            <textarea class="form-control" name="isi_laporan" cols="30" rows="5" placeholder="Masukkan Laporan Anda" required>{{ old('isi_laporan') }}</textarea>
                        </div>
                        <div class="from-group">
                            <label>Foto</label> <sup>*Tambahkan jika ada</sup>
                            <input style="margin-bottom: 10px" type="file" class="form-control" id="foto" name="foto" value="{{ old('foto') }}">
                        </div>

                        <button type="submit" class="btn btn-info" id="btn-float">Simpan </button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
