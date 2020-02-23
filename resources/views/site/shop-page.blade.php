@extends('site.layout.app') 
@section('head')
<link rel="stylesheet" href="{{asset('css\shop-page.css')}}">
<link rel="stylesheet" href="{{asset('css\home-page.css')}}">
@endsection
@section('pop-up')
<div class="pop-up-mobile-sort">
   <div class="nav-top-back fixed-top">
      <div class="logo top-icons d-flex justify-content-between">
         <a href="#" class="col-4 mt-3 p-0 ">
         <i class="fas fa-arrow-left pop-up-show-hide" data-pop-up="pop-up-mobile-sort"></i>
         <i class="fas fa-search fa-lg mr-3 search-button "></i>
         </a>
         <a class="nav-link p-0 col-4 mt-3" href="#">
            <h3 class=""> 
               Sort
            </h3>
         </a>
         <a href="" class="col-4 p-0 mt-3">
            <i class="fas fa-shopping-bag fa-lg">
               <div class="red-circle rounded-circle" >1</div>
            </i>
         </a>
      </div>
   </div>
   <div class="d-flex justify-content-center mt-5">
      <ul class="text-center p-0 list-group border-0 shadow-sm">
         <li class="list-group-item border-0 p-0">
            <a href="#" class="nav-link my-link h5" >Featured</a>
         </li>
         <li class="list-group-item border-0 p-0">
            <a href="#" class="nav-link my-link h5" >Price, low to high</a>
         </li>
         <li class="list-group-item border-0 p-0">
            <a href="#" class="nav-link my-link h5" >Price, high to low</a>
         </li>
         <li class="list-group-item border-0 p-0">
            <a href="#" class="nav-link my-link h5" >Alphabetically, A-Z</a>
         </li>
         <li class="list-group-item border-0 p-0">
            <a href="#" class="nav-link my-link h5" >Alphabetically, Z-A</a>
         </li>
         <li class="list-group-item border-0 p-0">
            <a href="#" class="nav-link my-link h5" >Date, old to new</a>
         </li>
         <li class="list-group-item border-0 p-0">
            <a href="#" class="nav-link my-link h5" >Date, new to old</a>
         </li>
         <li class="list-group-item border-0 p-0">
            <a href="#" class="nav-link my-link h5">Best Selling</a>
         </li>
      </ul>
   </div>
</div>
<div class="pop-up-mobile-filter">
   <div class="nav-top-back fixed-top">
      <div class="logo top-icons d-flex justify-content-between">
         <a href="#" class="col-4 mt-3 p-0 ">
         <i class="fas fa-arrow-left pop-up-show-hide" data-pop-up="pop-up-mobile-filter"></i>
         <i class="fas fa-search fa-lg mr-3 search-button"></i>
         </a>
         <a class="nav-link p-0 col-4 mt-3" href="#">
            <h3 class=""> 
               Filter
            </h3>
         </a>
         <a href="" class="col-4 p-0 mt-3">
            <i class="fas fa-shopping-bag fa-lg">
               <div class="red-circle rounded-circle" >1</div>
            </i>
         </a>
      </div>
   </div>
   <div class="row modal-body text-center mt-3">
      <!-- price -->
      <div class=" col-12">
         <span class="h5 font-weight-bold ">Price</span>
         <ul class="list-group mt-2">
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link">Under $100</a>
            </li>
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link"> $100 - $200</a>
            </li>
            <li class="list-group-item border-0 p-0" >
               <a href="#" class="nav-link my-link"> Above $200</a>
            </li>
         </ul>
      </div>
      <!-- Size -->
      <div class=" col-12 mt-3">
         <span class="h5 font-weight-bold ">Size</span>
         <ul class="list-group mt-2">
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link">Small</a>
            </li>
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link"> Medium</a>
            </li>
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link"> Large</a>
            </li>
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link"> Extra Large</a>
            </li>
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link"> XS</a>
            </li>
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link"> M</a>
            </li>
            <li class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link"> XL</a>
            </li>
         </ul>
      </div>
      <!-- Colors -->
      <div class=" col-12 mt-3">
         <span class="h5 font-weight-bold ">Colors</span>
         <div class="list-group mt-2">
            <div class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link">
               <span class="filter-color rounded-circle d-inline-block" style="background: #f44336;"></span>
               <span>Red</span>
               </a>
            </div>
            <div class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link">
               <span class="filter-color rounded-circle d-inline-block" style="background: #9c27b0;"></span>
               <span>Purple</span>
               </a>
            </div>
            <div class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link">
               <span class="filter-color rounded-circle d-inline-block" style="background: #2196f3;"></span>
               <span>Blue</span>
               </a>
            </div>
            <div class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link">
               <span class="filter-color rounded-circle d-inline-block" style="background: #4caf50;"></span>
               <span>Green</span>
               </a>
            </div>
            <div class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link">
               <span class="filter-color rounded-circle d-inline-block" style="background: #ffeb3b;"></span>
               <span>Yellow</span>
               </a>
            </div>
            <div class="list-group-item border-0 p-0">
               <a href="#" class="nav-link my-link">
               <span class="filter-color rounded-circle d-inline-block" style="background: #ff9800;"></span>
               <span>Orange</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('content')
<div class="w-100 mt-lg-5 mt-md-5 mb-5 text-center">
   <p class="h1 font-weight-bold w-100">Shop</p>
   <p class="w-100">
      <a href="#" class="my-link">Home </a>
      <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
      <a href="#" class="my-link"> Shop</a>
   </p>
</div>
<div class="container p-0 d-lg-block d-md-block d-sm-none d-none">
   <div class="d-flex justify-content-between pt-3 pr-3 pl-3 pb-0 dropdown " style="background-color: #f8f8f2;">
      <div class="col-lg-4 my-auto ">
         <div class="filter-dropdown d-inline-block ">
            <span class=" font-weight-bold h5 pb-2 d-block cursor-pointer" >Filter  <i class="fas fa-angle-down h6"></i></span>                              
            <!-- Categories -->
            <div class="container-fluid position-absolute shadow-sm dropdown-content filter-dropdown-content left-0">
               <div class="row ">
                  <div class="col-lg-2 col-md-6 text-lg-left text-md-center m-lg-4 mr-lg-5 m-md-0 mt-md-5">
                     <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Categories</span>
                     <ul class="list-group mt-2">
                        <li class="list-group-item border-0 p-0">
                           <a href="#"class="nav-link my-link2 ">Kids</a>
                        </li>
                        <li class="list-group-item border-0 p-0" >
                           <a href="#" class="nav-link my-link2" >Women's</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">Bags</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">Clothing</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">Shoes</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">New Arrivals</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">Other</a>
                        </li>
                     </ul>
                  </div>
                  <!-- price -->
                  <div class="col-lg-2 col-md-6 text-lg-left text-md-center m-lg-4 mr-lg-5 m-md-0 mt-md-5">
                     <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Price</span>
                     <ul class="list-group mt-2">
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">Under $100</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2"> $100 - $200</a>
                        </li>
                        <li class="list-group-item border-0 p-0" >
                           <a href="#" class="nav-link my-link2"> Above $200</a>
                        </li>
                     </ul>
                  </div>
                  <!-- Size -->
                  <div class="col-lg-2 col-md-6 text-lg-left text-md-center m-lg-4 mr-lg-5 m-md-0 mt-md-5">
                     <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Size</span>
                     <ul class="list-group mt-2">
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">Small</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2"> Medium</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2"> Large</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2"> Extra Large</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2"> XS</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2"> M</a>
                        </li>
                        <li class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2"> XL</a>
                        </li>
                     </ul>
                  </div>
                  <!-- Colors -->
                  <div class="col-lg-2 col-md-6 text-lg-left text-md-center m-lg-4 m-md-0 mt-md-5">
                     <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Colors</span>
                     <div class="list-group mt-2">
                        <div class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">
                           <span class="filter-color rounded-circle d-inline-block" style="background: #f44336;"></span>
                           <span class="position-color-center">Red</span>
                           </a>
                        </div>
                        <div class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">
                           <span class="filter-color rounded-circle d-inline-block" style="background: #9c27b0;"></span>
                           <span class="position-color-center">Purple</span>
                           </a>
                        </div>
                        <div class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">
                           <span class="filter-color rounded-circle d-inline-block" style="background: #2196f3;"></span>
                           <span class="position-color-center">Blue</span>
                           </a>
                        </div>
                        <div class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">
                           <span class="filter-color rounded-circle d-inline-block" style="background: #4caf50;"></span>
                           <span class="position-color-center">Green</span>
                           </a>
                        </div>
                        <div class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">
                           <span class="filter-color rounded-circle d-inline-block" style="background: #ffeb3b;"></span>
                           <span class="position-color-center">Yellow</span>
                           </a>
                        </div>
                        <div class="list-group-item border-0 p-0">
                           <a href="#" class="nav-link my-link2">
                           <span class="filter-color rounded-circle d-inline-block" style="background: #ff9800;"></span>
                           <span class="position-color-center">Orange</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 text-center">
         <div class="font-weight-bold h5 my-auto">
            Showing 1 - 20 of 26 results
         </div>
      </div>
      <div class="col-lg-4 text-right d-flex justify-content-end ">
         <div class="filter-dropdown d-inline-block ">
            <span class="font-weight-bold h5 mr-1 my-auto pb-3" >Sort by :</span>
            <span class="cursor-pointer sort-selected d-inline h5 my-auto pb-3"> Featured</span>
            <ul class="col-lg-6 col-md-12 text-left p-0 list-group border-0 shadow-sm position-absolute filter-dropdown-content right-0">
               <li class="sort-by list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link2 " >Featured</a>
               </li>
               <li class="sort-by list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link2 " >Price, low to high</a>
               </li>
               <li class="sort-by list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link2 " >Price, high to low</a>
               </li>
               <li class="sort-by list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link2 " >Alphabetically, A-Z</a>
               </li>
               <li class="sort-by list-group-item border-0 p-0">
                  <a href="#" class=" nav-link my-link2" >Alphabetically, Z-A</a>
               </li>
               <li class="sort-by list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link2 " >Date, old to new</a>
               </li>
               <li class="sort-by list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link2 " >Date, new to old</a>
               </li>
               <li class="sort-by list-group-item border-0 p-0">
                  <a href="#" class="nav-link my-link2 ">Best Selling</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<div class="filter-mobile d-lg-none d-md-none d-sm-block">
   <span class="filter-mobile-item d-block rounded-circle text-center font-weight-bold mb-2 pop-up-show-hide" data-pop-up="pop-up-mobile-sort">SORT</span>
   <span class="filter-mobile-item d-block rounded-circle text-center font-weight-bold pop-up-show-hide" data-pop-up="pop-up-mobile-filter">FILTER</span>
</div>
<div class="container p-0">
<div class="d-flex flex-wrap justify-content-between">
   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="card border-0 feature-products">
         <img class="card-img-top " src="{{asset('img/feature-products-img-01.webp')}}" alt="Card image cap">
         <div class="card-body d-flex p-0 pt-1">
            <p class="card-text col-8 w-100">
               <a href="#" class=" my-link p-0" >Product Default Layout</a>
            </p>
            <p class="card-text col-4 p-0">Rs. 6,278.14</p>
         </div>
         <div class="feature-product-icons">
            <ul class="list-group">
               <li class="list-group-item border-0 pb-0">
                  <a href="#">
                  <i class="fas fa-search fa-lg "></i>
                  </a>
               </li>
               <li class="list-group-item border-0 pb-0"> 
                  <a href="">
                  <i class="fas fa-compress-arrows-alt fa-lg"></i>
                  </a>
               </li>
               <li class="list-group-item border-0">
                  <a href="#">
                  <i class="far fa-heart fa-lg"></i>
                  </a>
               </li>
            </ul>
         </div>
         <div class="items-home-page-btn">
            <form>           
               <button class="btn btn-outline-secondary btn-home-page" type="button">
               <i class="fas fa-shopping-cart mr-1"></i>Add To Card
               </button>
            </form>
         </div>
         <div class="col-9 items-home-page-sizeNcolor">
            <div class="items-home-page-size d-flex flex-wrap justify-content-around mb-2">
               <span class="rounded-circle">S</span>
               <span class="rounded-circle">M</span>
               <span class="rounded-circle">L</span>
            </div>
            <div class="items-home-page-color d-flex flex-wrap justify-content-around">
               <span class="rounded-circle" style="background-color: blanchedalmond;"></span>
               <span class="rounded-circle" style="background-color: rgb(182, 134, 61);"></span>
               <span class="rounded-circle" style="background-color: rgb(176, 190, 228);"></span>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="card border-0 feature-products">
         <img class="card-img-top " src="{{asset('img/feature-products-img-02.webp')}}" alt="Card image cap">
         <div class="card-body d-flex p-0 pt-1">
            <p class="card-text col-8 w-100">
               <a href="#" class=" my-link p-0" >Product Default Layout</a>
            </p>
            <p class="card-text col-4 p-0">Rs. 6,278.14</p>
         </div>
         <div class="feature-product-icons">
            <ul class="list-group">
               <li class="list-group-item border-0 pb-0">
                  <a href="#">
                  <i class="fas fa-search fa-lg "></i>
                  </a>
               </li>
               <li class="list-group-item border-0 pb-0"> 
                  <a href="">
                  <i class="fas fa-compress-arrows-alt fa-lg"></i>
                  </a>
               </li>
               <li class="list-group-item border-0">
                  <a href="#">
                  <i class="far fa-heart fa-lg"></i>
                  </a>
               </li>
            </ul>
         </div>
         <div class="items-home-page-btn">
            <form>           
               <button class="btn btn-outline-secondary btn-home-page" type="button">
               <i class="fas fa-shopping-cart mr-1"></i>Add To Card
               </button>
            </form>
         </div>
         <div class="col-9 items-home-page-sizeNcolor">
            <div class="items-home-page-size d-flex flex-wrap justify-content-around mb-2">
               <span class="rounded-circle">S</span>
               <span class="rounded-circle">M</span>
               <span class="rounded-circle">L</span>
            </div>
            <div class="items-home-page-color d-flex flex-wrap justify-content-around">
               <span class="rounded-circle" style="background-color: blanchedalmond;"></span>
               <span class="rounded-circle" style="background-color: rgb(182, 134, 61);"></span>
               <span class="rounded-circle" style="background-color: rgb(176, 190, 228);"></span>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="card border-0 feature-products">
         <img class="card-img-top " src="{{asset('img/feature-products-img-03.webp')}}" alt="Card image cap">
         <div class="card-body d-flex p-0 pt-1">
            <p class="card-text col-8 w-100">
               <a href="#" class=" my-link p-0" >Product Default Layout</a>
            </p>
            <p class="card-text col-4 p-0">Rs. 6,278.14</p>
         </div>
         <div class="feature-product-icons">
            <ul class="list-group">
               <li class="list-group-item border-0 pb-0">
                  <a href="#">
                  <i class="fas fa-search fa-lg "></i>
                  </a>
               </li>
               <li class="list-group-item border-0 pb-0"> 
                  <a href="">
                  <i class="fas fa-compress-arrows-alt fa-lg"></i>
                  </a>
               </li>
               <li class="list-group-item border-0">
                  <a href="#">
                  <i class="far fa-heart fa-lg"></i>
                  </a>
               </li>
            </ul>
         </div>
         <div class="items-home-page-btn">
            <form>           
               <button class="btn btn-outline-secondary btn-home-page" type="button">
               <i class="fas fa-shopping-cart mr-1"></i>Add To Card
               </button>
            </form>
         </div>
         <div class="col-9 items-home-page-sizeNcolor">
            <div class="items-home-page-size d-flex flex-wrap justify-content-around mb-2">
               <span class="rounded-circle">S</span>
               <span class="rounded-circle">M</span>
               <span class="rounded-circle">L</span>
            </div>
            <div class="items-home-page-color d-flex flex-wrap justify-content-around">
               <span class="rounded-circle" style="background-color: blanchedalmond;"></span>
               <span class="rounded-circle" style="background-color: rgb(182, 134, 61);"></span>
               <span class="rounded-circle" style="background-color: rgb(176, 190, 228);"></span>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-4 col-sm-6 col-12">
      <div class="card border-0 feature-products">
         <img class="card-img-top " src="{{asset('img/feature-products-img-04.webp')}}" alt="Card image cap">
         <div class="card-body d-flex p-0 pt-1">
            <p class="card-text col-8 w-100">
               <a href="#" class=" my-link p-0" >Product Default Layout</a>
            </p>
            <p class="card-text col-4 p-0">Rs. 6,278.14</p>
         </div>
         <div class="feature-product-icons">
            <ul class="list-group">
               <li class="list-group-item border-0 pb-0">
                  <a href="#">
                  <i class="fas fa-search fa-lg "></i>
                  </a>
               </li>
               <li class="list-group-item border-0 pb-0"> 
                  <a href="">
                  <i class="fas fa-compress-arrows-alt fa-lg"></i>
                  </a>
               </li>
               <li class="list-group-item border-0">
                  <a href="#">
                  <i class="far fa-heart fa-lg"></i>
                  </a>
               </li>
            </ul>
         </div>
         <div class="items-home-page-btn">
            <form>           
               <button class="btn btn-outline-secondary btn-home-page" type="button">
               <i class="fas fa-shopping-cart mr-1"></i>Add To Card
               </button>
            </form>
         </div>
         <div class="col-9 items-home-page-sizeNcolor">
            <div class="items-home-page-size d-flex flex-wrap justify-content-around mb-2">
               <span class="rounded-circle">S</span>
               <span class="rounded-circle">M</span>
               <span class="rounded-circle">L</span>
            </div>
            <div class="items-home-page-color d-flex flex-wrap justify-content-around">
               <span class="rounded-circle" style="background-color: blanchedalmond;"></span>
               <span class="rounded-circle" style="background-color: rgb(182, 134, 61);"></span>
               <span class="rounded-circle" style="background-color: rgb(176, 190, 228);"></span>
            </div>
         </div>
      </div>
   </div>
</div>
<div style="color:red!important;" class="d-flex justify-content-center">{{$results->links()}}</div>

@endsection