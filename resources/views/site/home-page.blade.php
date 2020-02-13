@extends('site.layout.app') 
@section('head')
<link rel="stylesheet" href="{{asset('css\home-page.css')}}"> @endsection @section('content')
<div class="myW-100">a</div>
<div class="container">
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
    <div class="d-flex flex-wrap justify-content-between">
        <a href="product">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card border-0 feature-products">
                    <img class="card-img-top " src="{{asset('img/feature-products-img-01.webp')}}" alt="Card image cap">
                    <div class="card-body d-flex p-0 pt-1">
                        <p class="card-text col-8 w-100">
                            <a href="#" class=" my-link p-0">Product Default Layout</a>
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
        </a>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card border-0 feature-products">
                <img class="card-img-top " src="{{asset('img/feature-products-img-02.webp')}}" alt="Card image cap">
                <div class="card-body d-flex p-0 pt-1">
                    <p class="card-text col-8 w-100">
                        <a href="#" class=" my-link p-0">Product Default Layout</a>
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
                        <a href="#" class=" my-link p-0">Product Default Layout</a>
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
                        <a href="#" class=" my-link p-0">Product Default Layout</a>
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
@endsection