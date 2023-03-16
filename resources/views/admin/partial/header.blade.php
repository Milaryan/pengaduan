<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">

                <h3 class="text-align-center text-black text-decoration-none"><strong>AP2M</strong> KOTA MOJOKERTO</h3>
            </a>

        </div>

        <div class="right-div">
            <a href="#" class="btn btn-danger pull-right">LOGOUT</a>
        </div>
    </div>
</div>
{{-- logo header --}}
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        @if ($menu == 'Dashboard')
                            <li><a href="{{ route('home') }}" class="menu-top-active">DASHBOARD</a></li>
                        @else
                            <li><a href="{{ route('home') }}">DASHBOARD</a></li>
                        @endif
                        @if ($menu == 'Petugas')
                            <li><a href="{{ route('petugas') }}" class="menu-top-active">Petugas</a></li>
                        @else
                            <li><a href="{{ route('petugas') }}">Petugas</a></li>
                        @endif
                        @if ($menu == 'Masyarakat')
                            <li><a href="{{ route('masyarakat') }}" class="menu-top-active">Masyarakat</a></li>
                        @else
                            <li><a href="{{ route('masyarakat') }}">Masyarakat</a></li>
                        @endif
                        @if ($menu == 'Pengaduan')
                            <li>
                                <a href="pengaduan" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Pengaduan <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pengaduan') }}">Semua</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pengaduanterbaru') }}">Terbaru</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pengaduanproses') }}">Proses</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pengaduanselesai') }}">Selesai</a></li>
                                </ul>
                            </li>
                        @else
                        <li>
                            <a href="pengaduan" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Pengaduan <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pengaduan') }}">Semua</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pengaduanterbaru') }}">Terbaru</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pengaduanproses') }}">Proses</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('pengaduanselesai') }}">Selesai</a></li>
                            </ul>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
