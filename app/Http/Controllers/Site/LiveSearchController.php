<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class LiveSearchController extends Controller
{

    public function action(Request $request){
        if($request->ajax()){
            $output="";
            $products=DB::table('product')->where('title','LIKE','%'.$request->search."%")->get();
            if($products){
                foreach ($products as $key => $product) {
                $output.='<tr>'.
                    '<td>'.$product->id.'</td>'.
                    '<td>'.$product->title.'</td>'.
                    '</tr>';
                }
            return Response($output);
            }
        }
    }
    
}
// <a href="product/'.$row->id.'">
// <div class="col-lg-3 col-md-4 col-sm-6 col-12">
//     <div class="card border-0 feature-products">
//         <img class="card-img-top " src="'.asset('img/uploads/'.$row->preview.'').'" alt="Card image cap">
//         <div class="card-body d-flex p-0 pt-1">
//             <p class="card-text col-8 w-100">
//                 <a href="product/'.$row->id.'" class=" my-link p-0">'.$row->title.'</a>
//             </p>
//             <p class="card-text col-4 p-0">$'.$row->price.'</p>
//         </div>
//         <div class="feature-product-icons">
//             <ul class="list-group">
//                 <li class="list-group-item border-0 pb-0">
//                     <a href="#">
//                         <i class="fas fa-compress-arrows-alt fa-lg"></i>
//                     </a>
//                 </li>
//                 <li class="list-group-item border-0">
//                     <a href="#">
//                         <i class="far fa-heart fa-lg"></i>
//                     </a>
//                 </li>
//             </ul>
//         </div>
//         <div class="items-home-page-btn">
//             <form>
//                 <button class="btn btn-outline-secondary btn-home-page" type="button">
//                     <i class="fas fa-shopping-cart mr-1"></i>Add To Card
//                 </button>
//             </form>
//         </div>
//         <div class="col-9 items-home-page-sizeNcolor">
//             <div class="items-home-page-size d-flex flex-wrap justify-content-around mb-2">
//             @foreach($row->SizeLimit as $size)
//                 <span class="rounded-circle font-weight-bold">{{$size->name}}</span>
//             @endforeach
//             </div>
//             <div class="items-home-page-color d-flex flex-wrap justify-content-around">
//             @foreach($row->ColorLimit as $color)
//                 <span class="rounded-circle" style="background-color: {{$color->ColorCode->code}};"></span>
//             @endforeach
//             <a href="product/'.$row->id.'" class="my-link text-xs"><span class="rounded-circle">Other</span></a>

//             </div>
            
//         </div>
//     </div>
// </div>
// </a>