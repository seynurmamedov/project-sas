<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use \Crypt;
use App\Models\SizeStatic;
use App\Models\ColorStatic;
use App\Models\Category;
class ShopController extends Controller
{
    public function getProductsShop(){
        $results = Product::where(['is_delete'=>0,'is_active'=>1])->paginate(8);
        $colors= ColorStatic::where(['is_delete'=>0])->get();
        $sizes= SizeStatic::get();
        $categories= Category::where(['is_delete'=>0])->get();
        return view('site.shop-page',['results'=>$results,'sizes'=>$sizes,'colors'=>$colors,'categories'=>$categories]);
    }
    public function filter(Request $request){
        $p=Product::query();
        $output="";
        if($request->gender){
            $p->where(['is_delete'=>0,'is_active'=>1,'gender_id'=>$request->gender]);
        }
        if($request->category){
            $p->where(['cat_id'=>$request->category]);
        }
        if($request->size){
            $p->whereHas('Size', function ($query) use($request) {
                $query->where('name', $request->size);
            });
        }
        if($request->color){
            $p->whereHas('Color', function ($query) use($request) {
                $query->where('color_id', $request->color);
            });
        }
        if($request->sort){
            $p->orderBy($request->input('sort')[0],$request->input('sort')[1]);
        }
        $data = json_decode($p->get(), true);
        if(empty($data)) {
            $output="No Product";
            return Response($output);
        }
        else{
            $z=$p->get();

            foreach ($z as $key => $product) {
                $outputSize="";
                $outputColor="";
                foreach($product->SizeLimit as $key => $size){
                    $outputSize.='<span class="rounded-circle font-weight-bold" data-size="'.$size->name.'">'.$size->name.'</span>';
                };
                foreach($product->ColorLimit as $color){
                    $outputColor.='<span class="rounded-circle" style="background-color: '.$color->ColorCode->code.'" data-color="'.$color->ColorCode->name.'"></span>';
                };
                $output.='<a href="'.route('getProductSingle',['id'=>Crypt::encrypt($product->id)]).'" >
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 ">
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
                                        <i class="fas fa-shopping-cart mr-1 "></i>Add To Card
                                    </button>
                                </form>
                            </div>
                            <div class="col-9 items-home-page-sizeNcolor">
                                <div class="items-home-page-size d-flex flex-wrap justify-content-around mb-2">
                                    <span class="d-none size-data" data-size=""></span>
                                '.$outputSize.'
                                </div>
                            <div class="items-home-page-color d-flex flex-wrap justify-content-around">
                            <span class="d-none color-data" data-color=""></span>
                            '.$outputColor.'
                            <a href="'.route('getProductSingle',['id'=>Crypt::encrypt($product->id)]).'" class="my-link text-xs"><span class="rounded-circle">Other</span></a>
                            
                            </div>
                        </div>

                        </div>
                    </div>
                </a>';
                }
                return Response($output);        

        }
    }

}
