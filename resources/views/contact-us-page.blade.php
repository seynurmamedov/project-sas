@extends('layout.app') 
@section('head')
<link rel="stylesheet" href="{{asset('css\contact-us-page.css')}}">
@endsection
@section('content')
<div class="w-100 mt-lg-5 mt-md-5 mb-5 text-center">
   <p class="h1 font-weight-bold w-100">Contact us</p>
   <p class="w-100">
      <a href="#" class="my-link">Home </a>
      <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
      <a href="#" class="my-link"> Contact Us</a>
   </p>
</div>
<div class="container  mb-5">
   <div class="row text-center " >
      <div class="col-12 col-sm-6 col-lg-3">
         <p><i class="fas fa-phone-alt fa-2x" style="color: #fb5c42;"></i></p>
         <h3><strong>Phone</strong></h3>
         <P>+84 1800 585 678</P>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
         <p> <i class="fas fa-map-marker-alt fa-2x" style="color: #fb5c42;"></i></p>
         <h3><strong>Adress</strong></h3>
         <P>PO Box 16122 Collin Street West, Victoria 875 United State</P>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
         <p><i class="far fa-clock fa-2x" style="color: #fb5c42;"></i></p>
         <h3><strong>Open Time</strong></h3>
         <P>10:00 am to 23:00 pm</P>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
         <p><i class="far fa-envelope fa-2x" style="color: #fb5c42;"></i></p>
         <h3><strong>E-mail</strong></h3>
         <P>contact@marcostore.com</P>
      </div>
   </div>
</div>
<!-- map -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCZWy2YH-P1SUd4wbCz4gteGoX3aXSd1c&amp;libraries=places"></script>
<div id="mapp" style="width: 100%; height: 400px; position: relative; overflow: hidden;"></div>
<script type="text/javascript">
   var map = new google.maps.Map(document.getElementById('mapp'), {
       center: {
       lat: 40.3850194,
       lng: 49.82959440000002
       },
       zoom: 16
   });
   var marker = new google.maps.Marker({
       position: {
       lat: 40.3850194,
       lng: 49.82959440000002
       },
       map: map,
       draggable: false
   });
</script>
<!-- end map -->
<div class="container p-0">
   <div class="w-100 mt-5 mb-5 text-center">
      <p class="h1 font-weight-bold w-100">Leave Message</p>
   </div>
   <form class="text-center">
      <div class="d-flex flex-wrap justify-content-around  aling-items-center">
         <div class="col-lg col-sm-12 mb-sm-4 mb-md-0 ">
            <input type="text" class="form-control" placeholder="Full name">
         </div>
         <div class="col-lg  col-sm-12  ">
            <input type="email" class="form-control" placeholder="Your E-mail">
         </div>
      </div>
      <div class="form-group col-12 mt-4 mb-4">
         <textarea class="form-control" rows="5" placeholder="Message"></textarea>
      </div>
      <button type="button" class="btn btn-outline-danger btn-contact-us-page mb-5">SEND MESSAGE</button>
   </form>
</div>
@endsection