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
                        <span class="right-0"><a href="/admin/addpetugas" id="btn-float" class="btn btn-primary">Tambah</a></span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Petugas</th>
                                        <th>Nama Petugas</th>
                                        <th>Username</th>
                                        <th>No. Telp</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($petugas as $item)
                                        <tr class="odd gradeX">
                                            <td>{{ $item->id_petugas }}</td>
                                            <td>{{ $item->nama_petugas }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->telp }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td colspan="3" class="text-center">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#show{{ $item->id_petugas }}">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                                @include('admin.petugas.show')
                                                <a href="{{ route('editpetugas', $item->id_petugas) }}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#drop{{ $item->id_petugas }}">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                                @include('admin.petugas.drop')
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
