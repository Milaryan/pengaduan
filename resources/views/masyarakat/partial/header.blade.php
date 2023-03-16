<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo"><h1 style="text-align: center; text-decoration: none"> <a href="/">AP2M </h1><h1 style="text-align: center; text-decoration: none">KOTA MOJOKERTO</h1></a></div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <div class="menu-area">
                   <div class="limit-box">
                      <nav class="main-menu">
                         <ul class="menu-area-main">
                            <li class="active"> <a href="#">Home</a> </li>
                            <li> <a href="#about">Tentang Kami</a> </li>
                            <li> <a href="#cara">Tata Cara</a> </li>
                            <li><a href="#pengaduan">Pengaduan</a></li>
                            @if (Auth::user())
                              <li><a href="{{ route('logout') }}">Logout</a></li>                                
                            @else                              
                              <li><a href="/login">Login</a></li>                                
                            @endif
                         </ul>
                      </nav>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- end header inner -->
 </header>
