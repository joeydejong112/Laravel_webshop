<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Laravel webshop
    </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />

    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>



</head>

<body>
    {{-- Header --}}
    <a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
    <div class="header">
        <div class="container">
            <div class="logo">
                <h1><a href="/"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
            </div>
            <div class="head-t">
                @guest
                <ul class="card">
                    <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i>{{ __('Login') }}</a></li>
                    <li><a href="/register"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
                </ul>
                @endguest
                @auth
                <ul class="card">
                    
                    <li><a href="wishlist.html"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                    <li><a href="/register"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{Auth::user()->name}}</a></li>
                    <li><a href="about.html"><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="fa fa-user" aria-hidden="true"></i>{{ __('Logout') }}</a></li>

                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>















                
                @endauth
            </div>
            <div class="nav-top">

            <a href="{{url('/cart')}}">
                <div class="cart">

                    <span class="fa fa-shopping-cart my-cart-icon">Cart<span
                            class="badge badge-notify my-cart-badge"></span></span>
                </div>
                </a>
            </div>

        </div>
    </div>




@yield('content')
    {{-- content   --}}
 
</body>

</html>
