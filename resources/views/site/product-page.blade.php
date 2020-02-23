@extends('site.layout.app') 
@section('head')

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="{{asset('css\product-page.css')}}">

@endsection
@section('content')
<div class="w-100 mt-lg-5 mt-md-5 mb-5 text-center">
   <p class="h1 font-weight-bold w-100">Product details</p>
   <p class="w-100">
      <a href="{{route('getHome')}}" class="my-link">Home </a>
      <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
      <a href="#" class="my-link"> Product details</a>
   </p>
</div>
<div class="container max-width-product" >
   <div class="row mb-5">
      <div class="col-lg-6 col-md-5 d-flex flex-wrap">
         <div class="col-lg-2 col-md-2 p-0 mt-4 d-lg-block d-md-block d-sm-none" >
            <div class="slider-nav text-center">
               @foreach($result->Images as $image)
               <div class="slick-dupe">
                  <img class="d-block w-100" src="{{asset('img/uploads/'.$image->name.'')}}" alt="First slide">
               </div>
               @endforeach
            </div>
         </div> 
         <div class="col-lg-10 col-md-10 col-sm-12 pr-0" >
            <div class="slider-for">
               @foreach($result->Images as $image)              
               <div class="slick-dupe">
                  <img class="d-block w-100" src="{{asset('img/uploads/'.$image->name.'')}}" alt="First slide">
               </div>
               @endforeach
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-md-7 mt-lg-0 mt-md-0 mt-sm-5">
         <div class="col-12  mb-5">
            <p class="h2 font-weight-bold mb-2">{{$result->title}}</p>
            <p class="h3 font-weight-bold" style="color: #fb5c42;">${{$result->price}}</p>
            <p>{{$result->text}}</p>
            <div class="items-home-page-sizeNcolor mt-5">
               <div class="d-flex justify-content-between">
                  <div class="col-2">
                     <h4 class="font-weight-bold">Size:</h4>
                  </div>
                  <div class="items-home-page-size col-10 d-flex flex-wrap  mb-3">
                     @foreach($result->Size as $size)              
                      <span class="rounded-circle mr-1 font-weight-bold">{{$size->name}}</span>
                     @endforeach                     
                  </div>
               </div>
               <div class="d-flex justify-content-between">
                  <div class="col-2">
                     <h4 class="font-weight-bold">Color:</h4>
                  </div>                  
                  <div class="items-home-page-color col-10 d-flex flex-wrap">
                     @foreach($result->Color as $color)
                         <span class="rounded-circle mr-1" style="background-color: {{$color->ColorCode->code}};"></span>
                     @endforeach
                     
                  </div>
               </div>
            </div>
            <div class="d-flex flex-wrap w-100 mt-5 mb-5">
               <div class="col-3 input-group number-spinner p-0 d-flex" >
                  <button class="btn my-btn col-4" data-dir="dwn"><i class="fas fa-minus"></i></button>
                  <input type="text" class="form-control text-center col-4" value="1">
                  <button class="btn my-btn col-4" data-dir="up"><i class="fas fa-plus"></i></button>
               </div>
               <div class="col-7">
                  <button class="btn my-btn w-100 font-weight-bold">ADD TO CARD</button>
               </div>
               <div class="col-2 pl-0">
                  <button class="btn my-btn w-100 text-center"><i class="far fa-heart"></i></button>
               </div>
            </div>   
            <hr class=" w-100 ">
            <table class="table table-borderless">
               <tbody>
                  <tr>
                     <th scope="row">Product code:</th>
                     <td scope="col"><p class="text-uppercase m-0"> {{$result->p_code}}</p></td>
                  </tr>
                  <tr>
                     <th scope="row">Availability</th>
                     <td scope="col">In Stock</td>
                  </tr>
                  <tr>
                     <th scope="row">Share:</th>
                     <td scope="col" class="row mt-1 p-0">      
                        
                           <span class="social-networks rounded-circle mr-2">
                              <a href="#" class="">
                                 <i class="fab fa-instagram"></i>
                              </a>
                           </span>
                           <span class="social-networks rounded-circle mr-2">
                              <a href="">
                                 <i class="fab fa-facebook-f"></i>
                              </a>
                           </span>
                           <span class="social-networks rounded-circle">
                              <a href="#" class="">
                                 <i class="fab fa-youtube"></i>
                              </a >
                           </span>
                     
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-4"><hr></div>
      <div class="col-lg-4">
         <ul class="list-inline d-flex text-center dri-item">
            <li class="col-lg-4 border-0 list-group-item dri-items cursor-pointer p-0 h5 pt-1" data-dri="description">Description</li>
            <li class="col-lg-4 border-0 list-group-item dri-items cursor-pointer p-0 h5 pt-1" data-dri="review">Review</li>
            <li class="col-lg-4 border-0 list-group-item dri-items cursor-pointer p-0 h5 pt-1" data-dri="information">Information</li>
         </ul>
      </div>
      <div class="col-lg-4"><hr></div>
      <div class="col-lg-12 DRI">
         <div class="description">
            <p class="h5 font-weight-bold">Products Infomation</p>
            <p>Another very popular suit fabric is cotton. Similar to wool cotton is a breathable flexible material. Unfortunately, cotton tends to crease easily, meaning they don’t remain smart. Compared to wool fabrics cotton lacks luxury feel.Silk is one of the most expensive fabrics however, it offers superior comfort and luxury. The material is great for regulating temperature. Its breathable fabric means it retains the body’s heat in cool conditions and heat is expelled in warm weather.</p>
            <p class="h5 font-weight-bold">Material used</p>
            <p>Polyester is deemed lower quality due to its none natural quality’s. Made from synthetic materials, not natural like wool. Polyester suits become creased easily and are known for not being breathable. Polyester suits tend to have a shine to them compared to wool and cotton suits, this can make the suit look cheap. The texture of velvet is luxurious and breathable. Velvet is a great choice for dinner party jacket and can be worn all year round. However, we advise keeping it away from the office.</p>
         </div>
         <div class="information w-100">
            <table class="table table-striped table-borderless">
               <tbody>
                  <tr>
                     <th scope="row">Outer Shell</th>
                     <td>100% polyester</td>
                  </tr>
                  <tr>
                     <th scope="row">Lining</th>
                     <td>100% polyurethane</td>
                  </tr>
                  <tr>
                     <th scope="row">Size</th>
                     <td>
                        {{$result->Size->implode('name',',  ')}}
                        </td>
                  </tr>
                  <tr>
                     <th scope="row">Colors</th>
                     <td class="text-capitalize">@foreach($result->Color as $color)
                        {{$color->ColorCode->name}},
                     @endforeach
                     And More
                     </td>
                  </tr>
                  <tr>
                     <th scope="row">Care</th>
                     <td><img src="{{asset('img/jpg-care.webp')}}" alt=""></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>


@endsection
@section('script')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection