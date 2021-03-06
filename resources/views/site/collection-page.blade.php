@extends('site.layout.app') 
@section('head')
<link rel="stylesheet" href="{{asset('css\collection-page.css')}}">
@endsection
@section('content')
<div class="w-100 mt-lg-5 mt-md-5 mb-5 text-center">
   <p class="h1 font-weight-bold w-100">Collection</p>
   <p class="w-100">
   <a href="{{route('getHome')}}" class="my-link">Home </a>
      <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
      <span class="my-link"> Collection</span>
   </p>
</div>
<div class="container-fluid">
   <div class=" row home-layout">
      <div class="col-lg-6 col-md-6 col-sm-12 p-1  layout-item" >
         <a href="#" class="overflow-hidden d-block w-100 ">
         <img src="{{asset('img/home-img-3.webp')}}" width="100%"  height="100%" alt="">
         </a>
         <div class="position-absolute layout-item-img-3 text-right">
            <p class="font-weight-bold " style="color:#fb5c42">WOMEN'S</p>
            <p class="font-weight-bold class-name" style="color: black">Snowboard Clothing</p>
            <a href="# " >Shop Clother</a>
         </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 p-1  layout-item" >
         <a href="#" class="overflow-hidden d-block w-100 ">
         <img src="{{asset('img/home-img-2.webp')}}" width="100%" height="100%"   alt="">
         </a>
         <div class="position-absolute layout-item-img-2">
            <p  class="font-weight-bold" style="color:#fb5c42">MEN'S</p>
            <p  class="font-weight-bold class-name" style="color:black">Rounded Neck Cotton</p>
            <a href="# " >Shop Clother</a>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 p-1 layout-item">
         <a href="#" class="overflow-hidden d-block w-100 ">
            <img src="{{asset('img/collections-img-05.webp')}}" width="103.5%" height="100%"  alt="">
            <div class="position-absolute text-center layout-item-img-1">
               <p class="font-weight-bold" style="color:#fb5c42">10 PRODUCTS</p>
               <p class="font-weight-bold class-name" style="color:black">Clothing</p>
            </div>
         </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 p-1  layout-item" >
         <a href="#" class="overflow-hidden d-block w-100 ">
            <img src="{{asset('img/home-img-4.webp')}}" width="100%" height="100%"   alt="">
            <div class="position-absolute text-center layout-item-img-1">
               <p  class="font-weight-bold" style="color:#fb5c42">9 PRODUCTS</p>
               <p  class="font-weight-bold class-name" style="color:black">Glasses</p>
            </div>
         </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 p-1  layout-item" >
         <a href="#" class="overflow-hidden d-block w-100 ">
            <img src="{{asset('img/collections-img-06.webp')}}" width="103.5%" height="100%"   alt="">
            <div class="position-absolute text-center layout-item-img-1">
               <p  class="font-weight-bold" style="color:#fb5c42">10 PRODUCTS</p>
               <p  class="font-weight-bold class-name" style="color:black">Shoes</p>
            </div>
         </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 p-1  layout-item" >
         <a href="#" class="overflow-hidden d-block w-100 ">
            <img src="{{asset('img/home-img-1.webp')}}" width="100%" height="100%"   alt="">
            <div class="position-absolute text-center layout-item-img-1">
               <p  class="font-weight-bold" style="color:#fb5c42">10 PRODUCTS</p>
               <p  class="font-weight-bold class-name" style="color:black">Bags</p>
            </div>
         </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 p-1  layout-item" >
         <a href="#" class="overflow-hidden d-block w-100 ">
            <img src="{{asset('img/collections-img-07.webp')}}" width="103.5%" height="100%"   alt="">
            <div class="position-absolute text-center layout-item-img-1">
               <p  class="font-weight-bold" style="color:#fb5c42">8 PRODUCTS</p>
               <p  class="font-weight-bold class-name" style="color:black">Hat</p>
            </div>
         </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 p-1  layout-item" >
         <a href="#" class="overflow-hidden d-block w-100 ">
            <img src="{{asset('img/collections-img-08.webp')}}" width="103.5%" height="100%"   alt="">
            <div class="position-absolute text-center layout-item-img-1">
               <p  class="font-weight-bold" style="color:#fb5c42">8 PRODUCTS</p>
               <p  class="font-weight-bold class-name" style="color:black">T-Shirt</p>
            </div>
         </a>
      </div>
   </div>
</div>
@endsection