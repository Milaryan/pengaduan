@extends('admin.partial.main')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN {{ $menu }}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel {{ $menu }}
                        <span class="right-0"><a href="/admin/addpengaduan" id="btn-float" class="btn btn-primary">Tambah</a></span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Pengaduan</th>
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Isi Laporan</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengaduan as $item)
                                        <tr class="odd gradeX">
                                            <td>{{ $item->id_pengaduan }}</td>
                                            <td>{{ $item->tgl_pengaduan }}</td>
                                            <td>{{ $item->nik }}</td>
                                            <td>{{ $item->isi_laporan }}</td>
                                            <td><img src="{{ asset('foto_laporan/'.$item->foto) }}" height="100px" width="100px" alt=""></td>
                                            @if ($item->status == '')
                                                <strong>Belum diProses</strong>
                                            @else
                                                <strong>{{ $item->status }}</strong>
                                            @endif
                                            <td colspan="3" class="text-center">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#show{{ $item->nik }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                                @include('admin.pengaduan.show')
                                                <a href="{{ route('editmasyarakat', $item->nik) }}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#drop{{ $item->nik }}">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                                @include('admin.pengaduan.drop')
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
</div>
@endsection
