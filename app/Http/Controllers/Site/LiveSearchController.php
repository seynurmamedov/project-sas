<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use \Crypt;

class LiveSearchController extends Controller
{

    public function action(Request $request){
        if($request->search!=""){
            $output="";
            $products=Product::where('title','LIKE','%'.$request->search."%")->get();
            if($products){
                foreach ($products as $key => $product) {
                    $outputSize="";
                    $outputColor="";
                    foreach($product->SizeLimit as $key => $size){
                        $outputSize.='<span class="rounded-circle font-weight-bold" data-size="'.$size->name.'">'.$size->name.'</span>';
                    };
                    foreach($product->ColorLimit as $color){
                        $outputColor.='<span class="rounded-circle" style="background-color: '.$color->ColorCode->code.'" data-color="'.$color->ColorCode->name.'"></span>';
                    };
                $output.='<a href="'.route('getProductSingle',['id'=>Crypt::encrypt($product->id)]).'" >
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="card border-0 feature-products">
                            <img class="card-img-top " src="'.asset('img/uploads/'.$product->preview.'').'" alt="Card image cap">
                            <div class="card-body d-flex p-0 pt-1">
                                <p class="card-text col-8 w-100">
                                    <a href="'.route('getProductSingle',['id'=>Crypt::encrypt($product->id)]).'" class=" my-link p-0">'.$product->title.'</a>
                                </p>
                                <p class="card-text col-4 p-0">$'.$product->price.'.00</p>
                            </div>
                            <div class="feature-product-icons">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <button class="add-to-desired btn p-0" data-code="'.$product->p_code.'" data-name="'.$product->title.'" data-price="'.$product->price.'" data-img="'.$product->preview.'" data-link="'.Crypt::encrypt($product->id).'" >
                                        <i class="far fa-heart fa-lg"></i>
                                    </button>
                                </li>
                            </ul>
                            </div>
                            <div class="items-home-page-btn">
                            <form>
                                <button class="btn btn-outline-secondary btn-home-page add-to-cart "  data-code="'.$product->p_code.'" data-name="'.$product->title.'" data-price="'.$product->price.'" data-img="'.$product->preview.'" data-link="'.Crypt::encrypt($product->id).'" type="button">
                                    <i class="fas fa-shopping-cart mr-1 i-add"></i>Add To Card
                                </button>
                            </form>
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
