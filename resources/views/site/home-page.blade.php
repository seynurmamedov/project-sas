@extends('site.layout.app') 
@section('head')
<link rel="stylesheet" href="{{asset('css\home-page.css')}}"> 
@endsection 
@section('content')
<div class="myW-100">a</div>
<div class="container-fluid">
    <div class="row m-0 w-100 home-layout">
        <div class="col-lg-4 col-md-4 col-sm-4 p-1 layout-item">
            <a href="#" class="overflow-hidden d-block w-100">
                <img src="{{asset('img/home-img-1.webp')}}" width="100%" height="100%" alt="">
                <div class="position-absolute text-center layout-item-img-1">
                    <p class="font-weight-bold" style="color:#fb5c42">CLOTHING</p>
                    <h3 class="font-weight-bold" style="color:black">Tie Cylinder Bag</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 p-1  layout-item">
            <a href="#" class="overflow-hidden d-block w-100">
                <img src="{{asset('img/home-img-2.webp')}}" width="100%" height="100%" alt="">
            </a>
            <div class="position-absolute layout-item-img-2">
                <p class="font-weight-bold" style="color:#fb5c42">MEN'S</p>
                <h3 class="font-weight-bold" style="color:black">Rounded Neck Cotton</h3>
                <a href="# ">Shop Clother</a>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 p-1  layout-item">
            <a href="#" class="overflow-hidden d-block w-100">
                <img src="{{asset('img/home-img-3.webp')}}" width="100%" height="100%" alt="">
            </a>
            <div class="position-absolute layout-item-img-3">
                <p class="font-weight-bold" style="color:#fb5c42">WOMEN'S</p>
                <h3 class="font-weight-bold" style="color: black">Snowboard Clothing</h3>
                <a href="# ">Shop Clother</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 p-1  layout-item">
            <a href="#" class="overflow-hidden d-block w-100">
                <img src="{{asset('img/home-img-4.webp')}}" width="100%" height="100%" alt="">
                <div class="position-absolute text-center layout-item-img-1">
                    <p class="font-weight-bold" style="color:#fb5c42">GLASSES
                        <h3 class="font-weight-bold" style="color:black">Aviation Sunglasses</h3>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="w-100 mt-5 mb-5 text-center">
    <p class="h1 font-weight-bold w-100">Feature Products</p>
    <p class="w-100">Top sale on this week</p>
</div>
<div class="container p-0">
    <div class="d-flex flex-wrap ">
        @foreach($results as $result)
        <a href="{{route('getProductSingle',['id'=>Crypt::encrypt($result->id)])}}">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card border-0 feature-products">
                    <img class="card-img-top " src="{{asset('img/uploads/'.$result->preview.'')}}" alt="Card image cap">
                    <div class="card-body d-flex p-0 pt-1">
                        <p class="card-text col-8 w-100">
                            <a href="{{route('getProductSingle',['id'=>Crypt::encrypt($result->id)])}}" class="my-link p-0">{{$result->title}}</a>
                        </p>
                        <p class="card-text col-4 p-0">${{$result->price}}</p>
                    </div>
                    <div class="feature-product-icons">
                        <ul class="list-group">
                            <li class="list-group-item border-0 pb-0">
                                <button class="btn p-0">
                                    <i class="fas fa-compress-arrows-alt fa-lg"></i>
                                </button>
                            </li>
                            <li class="list-group-item border-0">
                                <button class="add-to-desired btn p-0" data-code="{{$result->p_code}}" data-name="{{$result->title}}" data-price="{{$result->price}}" data-img="{{$result->preview}}" data-link="{{Crypt::encrypt($result->id)}}" >
                                    <i class="far fa-heart fa-lg"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="items-home-page-btn">
                        <form>
                            <button class="btn btn-outline-secondary btn-home-page add-to-cart" data-code="{{$result->p_code}}" data-name="{{$result->title}}" data-price="{{$result->price}}" data-img="{{$result->preview}}" data-link="{{Crypt::encrypt($result->id)}}" type="button">
                                <i class="fas fa-shopping-cart mr-1"></i>Add To Card
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
   </div>
</div>
@endsection