<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class LiveSearchController extends Controller
{

    public function action(Request $request){
        if($request->search!=""){
            $output="";
            $products=Product::where('title','LIKE','%'.$request->search."%")->get();
            if($products){
                foreach ($products as $key => $product) {
                $output.='<a href="product/'.$product->id.'" >
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card border-0 feature-products">
                            <img class="card-img-top " src="'.asset('img/uploads/'.$product->preview.'').'" alt="Card image cap">
                            <div class="card-body d-flex p-0 pt-1">
                                <p class="card-text col-8 w-100">
                                    <a href="product/'.$product->id.'" class=" my-link p-0">'.$product->title.'</a>
                                </p>
                                <p class="card-text col-4 p-0">$'.$product->price.'</p>
                            </div>
                            <div class="feature-product-icons">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 pb-0">
                                        <a href="#">
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


                        </div>
                    </div>
                </a>';
                }
            return Response($output);
            }
        }
    }
    
}
