<footer>
    <div id="contact" class="footer">
       <div class="container">
          <div class="row pdn-top-30">
             <div class="col-md-12 ">
                <div class="footer-box">
                   <div class="headinga">
                      <h3>Alamat</h3>
                      <span>Jl. Gajah Mada No.145, Mergelo, Balongsari, Kec. Magersari, Kota Mojokerto, Jawa Timur 61314</span>
                      <p>(0321) 321750</p>
                   </div>
                   <ul class="location_icon">
                      <li> <a href="#"><img src={{ asset("icon/facebook.png") }}></a></li>
                      <li> <a href="#"><img src={{ asset("icon/Twitter.png") }}></a></li>
                      <li> <a href="#"><img src={{ asset("icon/instagram.png") }}></a></li>
                   </ul>
                   <div class="menu-bottom">
                      <ul class="link">
                        <li><a href="#">Home</a> </li>
                        <li><a href="#about">Tentang Kami</a> </li>
                        <li><a href="#pengaduan">Pengaduan</a></li>
                        @if (Auth::user())
                           <li><a href="{{ route('logout') }}">Logout</a></li>                                
                        @else                              
                           <li><a href="/login">Login</a></li>                                
                        @endif
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="copyright">
          <div class="container">
             <p>Copyright 2019 All Rights Reserved Design By  <a href="#">KOTA MOJOKERTO</a></p>
          </div>
       </div>
    </div>
 </footer>
