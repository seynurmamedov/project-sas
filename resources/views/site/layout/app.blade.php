<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
      <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> -->
      <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
      <link rel="icon" href="{{asset('img/uploads/'.$settings->logo.'')}}" type="image/icon type">
      <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css\navbar.css')}}">
      <link rel="stylesheet" href="{{asset('css\footer.css')}}">
      <link rel="stylesheet" href="{{asset('css\product.css')}}">    
      @yield('head')    
      <script src="https://kit.fontawesome.com/54230c22d1.js" crossorigin="anonymous"></script>
      <title>{{$settings->title}}</title>
   </head>
   <body>
      <!-- navbar -->
      
      <div class="pop-up-search my-col">
         <i class="far fa-times-circle position-absolute " id="close-pop-up-search-btn"></i>

         <div class="input-group search-input mx-auto mb-5">
            <input type="text" id="search"  name="search" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Search">
         </div>  
         <div class="container">

         <div class="searchAjax row"></div>
            
         </div>
      </div>
      <div class="pop-ups">
         <div class="pop-up-mobile-store">
            <ul class="list-group mt-5 d-flex justify-content-center text-center">
               <li class="list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link  font-weight-bold h5">Kids</a>
               </li>
               <li class="list-group-item border-0 p-0" >
                  <a href="#" class="nav-link my-link font-weight-bold h5">Women's</a>
               </li>
               <li class="list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link font-weight-bold h5">Bags</a>
               </li>
               <li class="list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link font-weight-bold h5">Clothing</a>
               </li>
               <li class="list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link font-weight-bold h5">Shoes</a>
               </li>
               <li class="list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link font-weight-bold h5">New Arrivals</a>
               </li>
               <li class="list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link font-weight-bold h5">Other</a>
               </li>
            </ul>
         </div>
         <div class="pop-up-mobile-account">
         @guest
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-8">
                     <div class="w-100 mt-lg-5 mt-md-5 mb-5 text-center">
                        <p class="h1 font-weight-bold w-100">{{ __('Login') }}</p>
                     </div>
                     <div class="card-body mb-2 pb-5">
                        <form method="POST" action="{{ route('login') }}">
                           @csrf
                           <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                              <div class="col-md-6">
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                 @error('email')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                 @enderror
                              </div>
                           </div>

                           <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                 @error('password')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                 @enderror
                              </div>
                           </div>

                           <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                 <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                       <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                       </label>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                 <button type="submit" class="btn  btn-login-page">
                                       {{ __('Login') }}
                                 </button>

                                 @if (Route::has('password.request'))
                                       <a class="btn btn-link my-link" href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
                                       </a>
                                 @endif
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            @if (Route::has('register'))
               <p class="nav-item text-center">
               If you have not registered yet
                     <a style="color:#fb5c42" href="{{ route('register') }}">{{ __('click') }}</a>.
               </p>
            @endif
            @else
            <div class="d-flex flex-wrap text-center mt-5 pt-5">
               <p class="nav-item p-2 mt-5 col-12 mt-5  h4">
                  <a class="my-link " href="#" role="button">
                        {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
               </p>
               <p class="nav-item p-2  col-12 h4">
                  <a class="my-link " href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
               </p>
            </div>
         @endguest
         </div>
         <div class="pop-up-mobile-contact box-shadov-sm">
            <div class="d-flex align-items-center flex-column mt-1 text-center">
               <div class="contact-item mt-3">
                  <a href="mailto:{{$settings->email}}" class="my-link " style=" color: #fff!important; font-size:14px;">
                  <i class="fas fa-envelope"></i>
                  {{$settings->email}}
                  </a>
               </div>
               <div class="contact-item mt-3">
                  <a href="tel:{{$settings->phone1}}" class="my-link " style="color: #fff!important; font-size:14px;">
                  <i class="fas fa-phone-alt"></i> 
                  Call: {{$settings->phone1}}
                  </a>
               </div>
            </div>
         </div>
         <div class="pop-up-mobile-more">
            <ul class="navbar-nav w-100 text-center mt-5 pt-5">
               <li class="nav-item">
                  <a class="nav-link  h5 font-weight-bold" href="{{route('getHome')}}"> Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link  h5 font-weight-bold" href="{{route('getCollection')}}"> Collection</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link  h5 font-weight-bold" href="{{route('getShop')}}"> Shop</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link  h5 font-weight-bold" href="{{route('getAbout')}}"> About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link  h5 font-weight-bold" href="{{route('getContactUs')}}"> Contact Us</a>
               </li>
               <hr class=" mx-auto d-md-none font-weight-bold p-2 w-50 my-5">
               <div class="row  justify-content-center mt-2">
                  <a href="{{$settings->instagram}}" target="_blank" class="social-networks-a">
                     <span class="social-networks rounded-circle mr-2">
                           <i class="fab fa-instagram"></i>
                     </span>
                  </a>
                  <a href="{{$settings->facebook}}" target="_blank" class="social-networks-a" >
                     <span class="social-networks rounded-circle mr-2">
                           <i class="fab fa-facebook-f"></i>
                     </span>
                  </a>
                  <a href="{{$settings->youtube}}" target="_blank" class="social-networks-a" >
                     <span class="social-networks rounded-circle">
                           <i class="fab fa-youtube"></i>
                     </span>
                  </a>
               </div>
            </ul>
         </div>
         @yield('pop-up')
      </div>
      <div class="mobile-nav">
         <div class="mobile-clearfix">
            <div class="mobile-nav-top fixed-top">
               <div class="logo top-icons d-flex justify-content-between">
                  <button class=" btn col-4 p-0 ">
                  <i class="search-button fas fa-search fa-lg mr-3 "></i>
                  </button>
                  <a class="nav-link p-0 col-4 mt-1" href="{{route('getHome')}}">
                     <h2 class="p-0"> 
                        Capie<span class="color-orange">.</span>
                     </h2>
                  </a>
               <div class="col-4 d-flex align-items-center justify-content-center">
                  <button class=" btn p-0 mr-4" data-toggle="modal" data-target="#desired">
                     <i class="far fa-heart fa-lg">
                        <div class="red-circle rounded-circle" ><span class="total-count-desired"></span></div>
                     </i>
                  </button>
                  <button class=" btn p-0 " data-toggle="modal" data-target="#cart">
                    <i class="fas fa-shopping-bag fa-lg p-0" >
                        <div class="red-circle rounded-circle" ><span class="total-count"></span></div>
                     </i>
                  </button>
               </div>
               </div>
            </div>
         </div>
         <div class="mobile-nav-bottom fixed-bottom">
            <div class="top-icons p-0">
               <ul class="d-flex justify-content-between mb-0 text-center" >
                  <li class="col-2 ">
                     <a href="{{route('getHome')}}" class="nav-link d-flex flex-wrap" style="color:black" >
                     <i class="fas col-12 fa-home m-0 p-0 fa-mySize"></i>
                     <span class=" mt-1">Home</span>
                     </a>
                  </li>
                  <li class="col-2">
                     <a href="#" class="nav-link d-flex flex-wrap pop-up-show-hide" style="color:black" data-pop-up="pop-up-mobile-store">
                     <i class="fas fa-map fa-mySize col-12 m-0 p-0 "></i>
                     <span class="mt-1">Store</span>
                     </a>
                  </li>
                  <li class="col-2">
                     <a href="#" class="nav-link d-flex flex-wrap pop-up-show-hide" style="color:black" data-pop-up="pop-up-mobile-account">
                     <i class="fas fa-user fa-mySize col-12 m-0 p-0"></i>
                     <span class="mt-1">Account</span>
                     </a>
                  </li>
                  <li class="col-2">
                     <a href="#" class="nav-link d-flex flex-wrap pop-up-show-hide" style="color:black" data-pop-up="pop-up-mobile-contact">
                     <i class="fas fa-map-marker-alt fa-mySize col-12 m-0 p-0"></i>
                     <span class=" mt-1">Contact</span>
                     </a>
                  </li>
                  <li class="col-2">
                     <a href="#" class="nav-link d-flex flex-wrap pop-up-show-hide" style="color:black" data-pop-up="pop-up-mobile-more">
                     <i class="fas fa-ellipsis-h fa-mySize col-12 m-0 p-0"></i>
                     <span class=" mt-1">More</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="container-fluid  p-0 m-0   ">
         <div class=" d-table w-100">
            <div class="nav-top">
               <div class="nav-btn-anim">
                  <i class="fas fa-bars fa-lg "></i>
               </div>
               <div class="pt-5 pb-4 logo">
                  <a class="nav-link pl-0" href="{{route('getHome')}}">
                     <h2> 
                        Capie<span class="color-orange">.</span>
                     </h2>
                  </a>
               </div>
               <div class="pb-5 mb-5 top-icons pr-0">
                  <button class="btn p-0 search-button">
                  <i class="fas fa-search fa-lg mr-4 "></i>
                  </button>
                  <button class="btn p-0" data-toggle="modal" data-target="#desired">
                     <i class="far fa-heart fa-lg mr-4">
                        <div class="red-circle rounded-circle" ><span class="total-count-desired"></span></div>
                     </i>
                  </button>
                  <button class="btn p-0" data-toggle="modal" data-target="#cart">
                     <i class="fas fa-shopping-bag fa-lg">
                        <div class="red-circle rounded-circle" ><span class="total-count"></span></div>
                     </i>
                  </button>
               </div>
               <nav class="navbar pr-0 pl-0  " id="navbar">
                  <ul class="navbar-nav w-100 pb-5 red-border ">
                     <li class="nav-item">
                        <a class="nav-link " href="{{route('getHome')}}"> Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="{{route('getCollection')}}"> Collection</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="{{route('getShop')}}"> Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="{{route('getAbout')}}"> About</a>
                     </li>
                     <li class="nav-item pb-5 mb-5">
                        <a class="nav-link " href="{{route('getContactUs')}}"> Contact Us</a>
                     </li>
                     <div class="my-dropdown">
                        <li class="">
                           <p class="nav-link cursor-pointer" href="">My Account</p>
                        </li>
                        <div class="dropdown-content my-dropdown-content">
                           <ul>
                              @guest
                                 <li class="nav-item p-2 pl-4">
                                    <a class="my-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                 </li>
                                 @if (Route::has('register'))
                                 <li class="nav-item p-2 pl-4">
                                       <a class="my-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                                 </li>
                                 @endif
                                 @else
                                    <li class="nav-item p-2 pl-4">
                                       <a class="my-link " href="#" role="button">
                                           {{ Auth::user()->name }} <span class="caret"></span>
                                       </a>
                                    </li>
                                    <li class="nav-item p-2 pl-4">
                                       <a class="my-link " href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                       </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                    </form>
                                    </li>
                              @endguest
                           </ul>
                        </div>
                     </div>
                     <div class="row ml-5 pl-1 mt-5 ">
                        <a href="{{$settings->instagram}}" target="_blank" class="social-networks-a">
                           <span class="social-networks rounded-circle mr-2">
                                 <i class="fab fa-instagram"></i>
                           </span>
                        </a>
                        <a href="{{$settings->facebook}}" target="_blank" class="social-networks-a" >
                           <span class="social-networks rounded-circle mr-2">
                                 <i class="fab fa-facebook-f"></i>
                           </span>
                        </a>
                        <a href="{{$settings->youtube}}" target="_blank" class="social-networks-a" >
                           <span class="social-networks rounded-circle">
                                 <i class="fab fa-youtube"></i>
                           </span>
                        </a>
                     </div>
                  </ul>
               </nav>
            </div>
            <span class="back-to-top rounded-circle text-center ">
               <i class="fas fa-chevron-up">
               </i>
               <h6>TOP</h6>
            </span>
            <div class="clear-fx-long"></div>
            <!-- navbar end -->
            <div class="main position-relative">
               <!-- content -->
               
               @yield('content')
               <!-- content end -->
               <!-- footer -->
               <div class="container-fluid text-center footer-up">
                  <div class="row justify-content-center  aling-items-center">
                     <div class=" col-sm-12 col-md-6 col-lg-6">
                        <div class="item-footer">
                           <p><img src="https://cdn.shopify.com/s/files/1/0257/3022/0109/files/icon1.png?v=1574828997"></p>
                           <strong>Free Delivery</strong>
                           <p>For all oder over 99$ </p>
                        </div>
                     </div>
                     <div class=" col-sm-12 col-md-6 col-lg-6">
                        <div class="item-footer">
                           <p><img src="https://cdn.shopify.com/s/files/1/0257/3022/0109/files/icon2.png?v=1574829006"></p>
                           <strong>30 Days Return</strong>
                           <p>If goods have problems </p>
                        </div>
                     </div>
                     <div class=" col-sm-12 col-md-6 col-lg-6">
                        <div class="item-footer ">
                           <p><img src="https://cdn.shopify.com/s/files/1/0257/3022/0109/files/icon3.png?v=1574829016"></p>
                           <strong>Security Payment</strong>
                           <p>100% secure payment </p>
                        </div>
                     </div>
                     <div class=" col-sm-12 col-md-6  col-lg-6">
                        <div class="item-footer">
                           <p><img src="https://cdn.shopify.com/s/files/1/0257/3022/0109/files/icon4.png?v=1574829025"></p>
                           <strong>24/7 Support</strong>
                           <p>Dedicated Support</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container mt-5 mb-5">
                  <div class="row justify-content-around">
                     <div class="col-sm-12 col-md-12  col-lg-6 segment-one">
                        <div class="items-footer">
                           <h2>Subscribe to Our Newsletter</h2>
                           <span>Subscribe to our newsletter and get 20% off your first purchase</span>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-12  col-lg-5 segment-two-footer mt-3">
                        <div class="items-footer">
                           <form>
                              <div class="input-group mb-3">
                                 <input type="text" class="form-control mail-footer" placeholder="Your E-mail" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                 <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-footer" type="button">Subscribe</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <hr>
               <footer class="page-footer font-small indigo mt-5">
                  <div class="container">
                     <div class="row justify-content-between">
                        <div class="col-lg-3 px-2 col-md-12">
                           <div class="logo">
                              <a class="nav-link p-0" href="{{route('getHome')}}">
                                 <h2 class="p-0 text-lg-left text-md-center"> 
                                    Capie<span class="color-orange">.</span>
                                 </h2>
                              </a>
                           </div>
                           <div class="footer-payment-container mt-5 pt-4 mb-5 d-flex flex-wrap justify-content-around ">
                              <div class="footer-payment-cell">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 24" role="img" width="38" height="24" aria-labelledby="pi-visa">
                                    <title id="pi-visa">Visa</title>
                                    <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                    <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                    <path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688" />
                                 </svg>
                              </div>
                              <div class="footer-payment-cell">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 24" role="img" width="38" height="24" aria-labelledby="pi-master">
                                    <title id="pi-master">Mastercard</title>
                                    <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                    <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                    <circle fill="#EB001B" cx="15" cy="12" r="7" />
                                    <circle fill="#F79E1B" cx="23" cy="12" r="7" />
                                    <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z" />
                                 </svg>
                              </div>
                              <div class="footer-payment-cell">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 24" width="38" height="24" role="img" aria-labelledby="pi-paypal">
                                    <title id="pi-paypal">PayPal</title>
                                    <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                    <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                    <path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z" />
                                    <path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z" />
                                    <path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z" />
                                 </svg>
                              </div>
                              <div class="footer-payment-cell">
                                 <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express">
                                    <title id="pi-american_express">American Express</title>
                                    <g fill="none">
                                       <path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07" />
                                       <path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1" />
                                       <path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z" />
                                    </g>
                                 </svg>
                              </div>
                              <div class="footer-payment-cell">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 24" width="38" height="24" role="img" aria-labelledby="pi-bitcoin">
                                    <title id="pi-bitcoin">Bitcoin</title>
                                    <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" />
                                    <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" />
                                    <path fill="#EDA024" d="M21.6 4.4c-4.2-1.4-8.7.8-10.2 5s.8 8.7 5 10.2 8.7-.8 10.2-5c1.4-4.2-.8-8.7-5-10.2z" />
                                    <path fill="#fff" d="M16.1 8.3l.3-1c.6.2 1.3.4 1.9.7.2-.5.4-1 .5-1.6l.9.3-.5 1.5.8.3.5-1.5.9.3c-.2.5-.4 1-.5 1.6l.4.2c.3.2.6.4.9.7.3.3.4.6.5 1 0 .3 0 .6-.2.9-.2.5-.5.8-1.1.9h-.2c.2.1.3.2.4.4.4.4.5.8.4 1.4 0 .1 0 .2-.1.3 0 .1 0 .1-.1.2-.1.2-.2.3-.2.5-.3.5-.8.9-1.5.9-.5 0-1 0-1.4-.1l-.4-.1c-.2.5-.4 1-.5 1.6l-.9-.3c.2-.5.4-1 .5-1.5l-.8-.3c-.2.5-.4 1-.5 1.5l-.9-.3c.2-.5.4-1 .5-1.6l-1.9-.6.6-1.1c.2.1.5.2.7.2.2.1.4 0 .5-.2L17 9.3v-.1c0-.3-.1-.5-.4-.5 0-.2-.2-.3-.5-.4zm1.2 6c.5.2.9.3 1.3.4.3.1.5.1.8.1.2 0 .3 0 .5-.1.5-.3.6-1 .2-1.4l-.6-.5c-.3-.2-.7-.3-1.1-.4-.1 0-.3-.1-.4-.2l-.7 2.1zm1-3.1c.3.1.5.2.7.2.3.1.6.2.9.1.4 0 .7-.1.8-.5.1-.3.1-.6 0-.8-.1-.2-.3-.3-.5-.4-.3-.2-.6-.3-1-.4l-.3-.1c-.1.7-.4 1.3-.6 1.9z" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-3 footer-nav">
                           <ul class="list-unstyled">
                              <li class="nav-item">
                                 <a href="{{route('getAbout')}}"" class="nav-link">
                                 <span>About</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{route('getCollection')}}" class="nav-link">
                                 <span>Collection</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{route('getContactUs')}}" class="nav-link">
                                 <span>Contact Us</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#!" class="nav-link">
                                 <span>FAQs</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-3 footer-nav">
                           <ul class="list-unstyled">
                              <li class="nav-item">
                                 <a href="{{route('getHome')}}" class="nav-link">
                                 <span>Privacy Policy</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{route('getHome')}}" class="nav-link">
                                 <span>Returns</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{route('getHome')}}" class="nav-link">
                                 <span>Promotions</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{route('getHome')}}" class="nav-link">
                                 <span>Orders Tracking</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-3 p-16-px">
                           <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><b>{{$settings->phone1}}</b></h5>
                           <span>{{$settings->address}}</span>
                        </div>
                     </div>
                  </div>
                  <div class="footer-copyright text-center py-5 px-1 ml-1 ">© 2020 BY SEYNUR MAMEDOV.</div>
               </footer>
               <div class="mobile-clearfix"></div>
            </div>
            <div class="clear-fx-long"></div>
         </div>
      </div>
      <!-- modals -->
      <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
               <div class="modal-header">
               <h3 class="modal-title font-weight-bold" id="exampleModalLabel">Cart</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <div class="modal-body">
                  <div class="show-cart row">
                  
                  </div>
                  <div class="justify-content-end h4 color-orange t-price">Total price: $<span class="total-cart"></span>.00</div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
               <button type="button" class="btn my-btn">Order now</button>
               </div>
            </div>
         </div>
      </div> 
      <div class="modal fade" id="desired" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
               <h3 class="modal-title font-weight-bold" id="exampleModalLabel">Wish list </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <div class="modal-body">
                  <div class="show-desired row">
                  
                  </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div> 
   </body>
   <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
   <script>
    var config = {
        routes: {
            search: "{{ route('search') }}",
            filter: "{{ route('filter') }}"
        }
    };
</script>
<script type="text/javascript">$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
      var assetImgLink="{{ URL::asset('img/uploads/')}}";
      var assetProductLink="{{ URL::asset('product')}}";
      </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="{{URL::asset('js/myapp.js')}}"></script>

   <script src="{{URL::asset('js/script.js')}}"></script>
   @yield('script')    


</html>