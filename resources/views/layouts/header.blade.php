<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-contact">
                 <ul>
                     <li>
                         <i class="fa fa-envelope-o" aria-hidden="true"></i>
                         <span>info@yourwebsite.com</span>
                     </li>
                     <li>
                         <i class="fa fa-phone" aria-hidden="true"></i>
                         <span>123-456-7878</span>
                     </li>
                 </ul>
             </div>
            </div>
            <div class="col-md-6">
                <div class="top-right">
                    <div class="top-social">
                        <ul>
                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="http://www.pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- control if customer connected, if yes button "customer" else button "register" "login" -->
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                    
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







