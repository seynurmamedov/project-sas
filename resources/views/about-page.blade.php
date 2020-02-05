@extends('layout.app') 
@section('head')
<link rel="stylesheet" href="{{asset('css\about-page.css')}}">
@endsection
@section('content')
<div class="w-100 mt-lg-5 mt-md-5 mb-5 text-center">
   <p class="h1 font-weight-bold w-100">About us</p>
   <p class="w-100 mt-1">
      <a href="#" class="my-link">Home </a>
      <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
      <a href="#" class="my-link"> About Us</a>
   </p>
</div>
<div class="container p-0 d-flex flex-wrap justify-content-around aling-items-center mb-5">
   <div class="card col-lg-6 col-md-6 col-sm-12 border-0" >
      <img class="card-img-top " src="{{asset('img/about-img-01.webp')}}" alt="Card image cap">
      <div class="card-body">
         <h3 class="card-title font-weight-bold">Who We Are</h3>
         <p class="card-text"> If there is one thing kids love more than eating pizza, it’s being able to make it themselves using all their favorite toppings. Creating a “make it yourself” pizza party is a great way to customize the meal while involving friends and family in a fun activity. Best of all, this crust recipe, which uses a surprise ingredient, is simple enough to make at home without making a mess of the kitchen.</p>
      </div>
   </div>
   <div class="card col-lg-6 col-md-6 col-sm-12 border-0" >
      <img class="card-img-top" src="{{asset('img/about-img-02.webp')}}" alt="Card image cap">
      <div class="card-body">
         <h3 class="card-title font-weight-bold">Our Vision</h3>
         <p class="card-text"> When it comes to convenience and enjoyment when cooking there are very few appliances in my kitchen that can compete with my George Foreman grill. While there are many different sizes and styles to the George Foreman line of grilling machines I have the George Foreman Next Grilleration Grill, which allows us to do almost anything on our grill. This grill even comes with the ability to make waffles in addition to all the wonderful.</p>
      </div>
   </div>
   <div class="jumbotron p-0 w-100" style="background-color: #f8f8f2;">
      <div class="w-100 mt-3  text-center">
         <p class="h1 font-weight-bold w-100">Why Choose Us</p>
         <p class="w-100 h5">Our Benefit</p>
      </div>
      <div class="d-flex flex-wrap">
         <div class="col-lg-6 col-md-6 col-sm-12 text-lg-left text-md-left text-sm-center text-center pl-lg-5 pl-md-5 pl-sm-0 pl-0">
            <div class="headphones">
               <p class="font-weight-bold h3">Support 24/7</p>
               <p class=" h6">Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity</p>
            </div>
            <div class="undo">
               <p class="font-weight-bold h3">Easy To Return</p>
               <p class="h6">Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity</p>
            </div>
            <div class="archive">
               <p class="font-weight-bold h3">Hight Quality</p>
               <p class="h6">Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity</p>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12  mt-5 pt-3">
            <div class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sweq6iD0gbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
      </div>
   </div>
   <div class="jumbotron p-0" style="background-color: white;">
      <div class="w-100 mt-3  text-center">
         <p class="h1 font-weight-bold w-100">Our Team</p>
         <p class="w-100 h5">Our Experience</p>
      </div>
      <div class="d-flex flex-wrap mt-5 text-center">
         <div class="card col-lg-3 col-md-3 col-sm-6 border-0" >
            <img class="card-img-top " src="{{asset('img/t1.webp')}}" alt="Card image cap">
            <div class="card-body">
               <h3 class="card-title font-weight-bold">Mason Wong</h3>
               <p class="card-text">Fashion Design </p>
            </div>
         </div>
         <div class="card col-lg-3 col-md-3 col-sm-6 border-0" >
            <img class="card-img-top" src="{{asset('img/t2.webp')}}" alt="Card image cap">
            <div class="card-body">
               <h3 class="card-title font-weight-bold">Benjamin</h3>
               <p class="card-text">C.E.O </p>
            </div>
         </div>
         <div class="card col-lg-3 col-md-3 col-sm-6 border-0" >
            <img class="card-img-top " src="{{asset('img/t3.webp')}}" alt="Card image cap">
            <div class="card-body">
               <h3 class="card-title font-weight-bold">Jack Bridges</h3>
               <p class="card-text"> Manager</p>
            </div>
         </div>
         <div class="card col-lg-3 col-md-3 col-sm-6 border-0" >
            <img class="card-img-top" src="{{asset('img/t4.webp')}}" alt="Card image cap">
            <div class="card-body">
               <h3 class="card-title font-weight-bold">Eugene Cole</h3>
               <p class="card-text">Delivery </p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection