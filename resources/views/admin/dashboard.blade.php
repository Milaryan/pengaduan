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

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert alert-info back-widget-set text-center">
                       <i class="fa fa-user fa-5x"></i>
                       <h3>{{ $petugas }}</h3>
                     <a href="{{ route('petugas') }}"> Petugas <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                   </div>
               </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert alert-success back-widget-set text-center">
                        <i class="fa fa-user fa-5x"></i>
                        <h3>{{ $masyarakat }}</h3>
                        <a href="{{ route('masyarakat') }}"> Masyarakat <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert alert-warning back-widget-set text-center">
                       <i class="fa fa-bars fa-5x"></i>
                       <h3>{{ $pengaduan }}</h3>
                       <a href="{{ route('pengaduan') }}"> Pengaduan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                   </div>
               </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="alert alert-danger back-widget-set text-center">
                       <i class="fa fa-briefcase fa-5x"></i>
                       <h3>{{ $tanggapan }} </h3>
                       <a href="{{ route('petugas') }}"> Tanggapan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                   </div>
               </div>
        </div>
   </div>
</div>
@endsection
