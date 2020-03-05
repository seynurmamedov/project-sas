@extends('site.layout.app') 
@section('head')
<link rel="stylesheet" href="{{asset('css\shop-page.css')}}">
<link rel="stylesheet" href="{{asset('css\home-page.css')}}">
@endsection
@section('pop-up')
<div class="pop-up-mobile-sort">
   <div class="nav-top-back fixed-top">
      <div class="logo top-icons d-flex ">
         <div class="col-4 p-0 mt-2 d-flex flex-wrap justify-content-center">
            <button class=" btn col-2  p-0 ">
            <i class="fas fa-arrow-left pop-up-show-hide" data-pop-up="pop-up-mobile-sort"></i>
            </button>
         </div>
         <p class="nav-link p-0 col-4 mt-3 h3 font-weight-bold" >       
               Sort
         </p>
      </div>
   </div>
   <div class="d-flex justify-content-center mt-5">
      <ul class="text-center p-0 list-group border-0 shadow-0 color-change sort-by">
         <input type="text" class="d-none sort-ajax" data-data="[]">
         <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["price", "asc"]'>
            <p class="nav-link  m-0 h5" >Price, low to high</p>
         </button>
         <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["price", "desc"]'>                 
          <p class="nav-link  m-0 h5" >Price, high to low</p>
         </button>
         <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["title", "asc"]'>                 
          <p class="nav-link  m-0 h5" >Alphabetically, A-Z</p>
         </button>              
         <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["title", "desc"]'>                 
          <p class="nav-link  m-0 h5" >Alphabetically, Z-A</p>
         </button>
         <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["created_at", "asc"]'>                
           <p class="nav-link  m-0 h5" >Date, old to new</p>
         </button>
         <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["created_at", "desc"]'>                
           <p class="nav-link  m-0 h5" >Date, new to old</p>
         </button>
      </ul>
   </div>
</div>
<div class="pop-up-mobile-filter">
   <div class="nav-top-back fixed-top">
<div class="logo top-icons d-flex ">
         <div class="col-4 p-0 mt-2 d-flex flex-wrap justify-content-center">
            <button class=" btn col-2  p-0 ">
            <i class="fas fa-arrow-left pop-up-show-hide" data-pop-up="pop-up-mobile-filter"></i>
            </button>
         </div>
         <p class="nav-link p-0 col-4 mt-3 h3 font-weight-bold" >       
               Filter
         </p>
      </div>
   </div>
   <div class="row modal-body text-center mt-3">
      <div class=" col-12 mb-4">
         <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Gender</span>
         <ul class="list-group mt-2 color-change">
            <input type="text" class="d-none gender-ajax" data-data="">
            <button class="btn p-0 list-group-item border-0 p-0 text-lg-left text-md-center" data-data="1">
               <p class="nav-link my-link2 text-capitalize m-0">Men</p>
            </button>
            <button class="btn p-0 list-group-item border-0 p-0 text-lg-left text-md-center" data-data="2">
               <p class="nav-link my-link2 text-capitalize m-0">Woman</p>
            </button>
         </ul>
      </div>
      <div class="col-12">
         <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Categories</span>
         <ul class="list-group mt-2 color-change">
            <input type="text" class="d-none category-ajax" data-data="">
            @foreach($categories as $category)
            <button class="btn h6 p-0 list-group-item border-0 p-0 text-lg-left text-md-center" data-data="{{$category->id}}">
               <p class="nav-link my-link2 text-capitalize m-0">{{$category->name}}</p>
            </button>
            @endforeach                       
         </ul>
      </div>
      <!-- Size -->
      <div class=" col-12 mt-3">
         <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Size</span>
         <ul class="list-group mt-2 color-change">
            <input type="text" class="d-none size-ajax" data-data="">
            @foreach($sizes as $size)
            <button class="btn p-0 list-group-item border-0 p-0 text-lg-left text-md-center" data-data="{{$size->name}}">
               <p class="nav-link my-link2 m-0" >{{$size->name}}</p>
            </button>
            @endforeach                       
         </ul>
      </div>
      <!-- Colors -->
      <div class=" col-12 mt-3">
         <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Colors</span>
         <div class="list-group mt-2 color-change">
         <input type="text" class="d-none color-ajax" data-data="">
            @foreach($colors as $color)
            <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data="{{$color->id}}">
               <p class="nav-link my-link2 m-0">
               <span class="filter-color rounded-circle d-inline-block" style="background: {{$color->code}};     border: 1px solid rgb(223, 223, 223);"></span>
               <span class="position-color-center text-capitalize">{{$color->name}}</span>
               </p>
            </button>
            @endforeach                       
         </div>
      </div>
   </div>
</div>
@endsection
@section('content')
<div class="w-100 mt-lg-5 mt-md-5 mb-5 text-center">
   <p class="h1 font-weight-bold w-100">Shop</p>
   <p class="w-100">
      <a href="{{route('getHome')}}" class="my-link">Home </a>
      <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
      <span class="my-link"> Shop</span>
   </p>
</div>
<div class="container-fluid p-0 d-lg-block d-md-block d-sm-none d-none mb-3">
   <div class="d-flex justify-content-between pt-3 pr-3 pl-3 pb-0 dropdown " style="background-color: #f8f8f2;">
      <div class="col-lg-4 my-auto ">
         <div class="filter-dropdown d-inline-block ">
            <span class=" font-weight-bold h5 pb-2 d-block cursor-pointer" >Filter  <i class="fas fa-angle-down h6"></i></span>                              
            <!-- Categories -->
            <div class="container-fluid position-absolute shadow-sm dropdown-content filter-dropdown-content left-4">
               <div class="row ">
                  <div class="col-lg-2 col-md-6 text-lg-left text-md-center  m-lg-4 mr-lg-5 m-md-0 mt-md-5">
                     <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Gender</span>
                     <ul class="list-group mt-2 color-change">
                        <input type="text" class="d-none gender-ajax" data-data="">
                        <button class="btn p-0 list-group-item border-0 p-0 text-lg-left text-md-center" data-data="1">
                           <p class="nav-link my-link2 text-capitalize m-0">Men</p>
                        </button>
                        <button class="btn p-0 list-group-item border-0 p-0 text-lg-left text-md-center" data-data="2">
                           <p class="nav-link my-link2 text-capitalize m-0">Woman</p>
                        </button>
                        </ul>
                  </div>
                  <!-- category -->
                  <div class="col-lg-2 col-md-6 text-lg-left text-md-center m-lg-4 mr-lg-5 m-md-0 mt-md-5">
                     <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Categories</span>
                     <ul class="list-group mt-2 color-change">
                        <input type="text" class="d-none category-ajax" data-data="">
                        @foreach($categories as $category)
                        <button class="btn p-0 list-group-item border-0 p-0 text-lg-left text-md-center" data-data="{{$category->id}}">
                           <p class="nav-link my-link2 text-capitalize m-0">{{$category->name}}</p>
                        </button>
                        @endforeach                       
                     </ul>
                  </div>
                  <!-- Size -->
                  <div class="col-lg-2 col-md-6 text-lg-left text-md-center m-lg-4 mr-lg-5 m-md-0 mt-md-5 mb-md-5">
                     <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Size</span>
                     <ul class="list-group mt-2 color-change">
                        <input type="text" class="d-none size-ajax" data-data="">
                        @foreach($sizes as $size)
                        <button class="btn p-0 list-group-item border-0 p-0 text-lg-left text-md-center" data-data="{{$size->name}}">
                           <p class="nav-link my-link2 m-0" >{{$size->name}}</p>
                        </button>
                        @endforeach                       
                     </ul>
                  </div>
                  <!-- Colors -->
                  <div class="col-lg-2 col-md-6 text-lg-left text-md-center m-lg-4 m-md-0 mt-md-5">
                     <span class="h5 font-weight-bold pl-lg-3 pl-md-0">Colors</span>
                     <div class="list-group mt-2 color-change">
                     <input type="text" class="d-none color-ajax" data-data="">
                        @foreach($colors as $color)
                        <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data="{{$color->id}}">
                           <p class="nav-link my-link2 m-0">
                           <span class="filter-color rounded-circle d-inline-block" style="background: {{$color->code}};     border: 1px solid rgb(223, 223, 223);"></span>
                           <span class="position-color-center text-capitalize">{{$color->name}}</span>
                           </p>
                        </button>
                        @endforeach                       
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
            <span class="cursor-pointer sort-selected d-inline h5 my-auto pb-3"> Select</span>
            <ul class="col-lg-6 col-md-12 text-left p-0 list-group border-0 shadow-sm position-absolute filter-dropdown-content right-0 color-change sort-by">
               <input type="text" class="d-none sort-ajax" data-data="[]">
               <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["price", "asc"]'>
                  <p class="nav-link my-link2 m-0 " >Price, low to high</p>
               </button>
               <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["price", "desc"]'>                  <p class="nav-link my-link2 m-0 " >Price, high to low</p>
               </button>
               <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["title", "asc"]'>                  <p class="nav-link my-link2 m-0 " >Alphabetically, A-Z</p>
               </button>              
               <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["title", "desc"]'>                  <p class="nav-link my-link2 m-0" >Alphabetically, Z-A</p>
               </button>
               <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["created_at", "asc"]'>                  <p class="nav-link my-link2 m-0 " >Date, old to new</p>
               </button>
               <button class="list-group-item border-0 p-0 text-lg-left text-md-center"  data-data='["created_at", "desc"]'>                  <p class="nav-link my-link2 m-0 " >Date, new to old</p>
               </button>
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
<div class="d-flex flex-wrap filter-ajax">
@foreach($results as $result)
<a href="{{route('getProductSingle',['id'=>Crypt::encrypt($result->id)])}}">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="card border-0 feature-products">
                    <img class="card-img-top " src="{{asset('img/uploads/'.$result->preview.'')}}" alt="Card image cap">
                    <div class="card-body d-flex p-0 mt-2 mb-2 " style="height:48px;">
                        <p class="card-text col-8 w-100">
                            <a href="{{route('getProductSingle',['id'=>Crypt::encrypt($result->id)])}}" class="my-link p-0">{{$result->title}}</a>
                        </p>
                        <p class="card-text col-4 p-0">${{$result->price}}.00</p>
                    </div>
                    <div class="feature-product-icons">
                        <ul class="list-group">
                            <li class="list-group-item border-0">
                                <button class="add-to-desired btn p-0" data-code="{{$result->p_code}}" data-name="{{$result->title}}" data-price="{{$result->price}}" data-img="{{$result->preview}}" data-link="{{Crypt::encrypt($result->id)}}" >
                                    <i class="far fa-heart fa-lg"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="items-home-page-btn">
                        <form>
                            <button class="btn btn-outline-secondary btn-home-page add-to-cart "  data-code="{{$result->p_code}}" data-name="{{$result->title}}" data-price="{{$result->price}}" data-img="{{$result->preview}}" data-link="{{Crypt::encrypt($result->id)}}" type="button">
                                <i class="fas fa-shopping-cart mr-1 "></i>Add To Card
                            </button>
                        </form>
                    </div>
                    <div class="col-9 items-home-page-sizeNcolor">
                        <div class="items-home-page-size d-flex flex-wrap justify-content-around mb-2">
                        <span class="d-none size-data" data-size=""></span>
                        @foreach($result->SizeLimit as $size)
                            <span class="rounded-circle font-weight-bold" data-size="{{$size->name}}">{{$size->name}}</span>
                        @endforeach
                        </div>
                        <div class="items-home-page-color d-flex flex-wrap justify-content-around">
                        <span class="d-none color-data" data-color=""></span>
                        @foreach($result->ColorLimit as $color)
                            <span class="rounded-circle" style="background-color: {{$color->ColorCode->code}};" data-color="{{$color->ColorCode->name}}"></span>
                        @endforeach
                        <a href="{{route('getProductSingle',['id'=>Crypt::encrypt($result->id)])}}" class="my-link text-xs"><span class="rounded-circle">Other</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
<div style="color:red!important; " class="d-flex justify-content-center col-12">{{$results->links()}}</div>

</div>

@endsection