@extends('admin.layout.main') 
@section('head')
<script src="{{asset('assets/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/datatables_basic.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/notifications/bootbox.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/components_modals.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/form_select2.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/picker_color.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/pickers/color/spectrum.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
@endsection
@section('content')
<div class="row">
   <div class="card col-12">
      <div class="card-header header-elements-inline">
         <h5 class="card-title">Product</h5>
         <div class="header-elements">
            <a href="{{route('getInsertProduct')}}">
               <button type="button" class="btn btn-primary text-center">
                  <h6 class="mb-0">Add New Product <i class="mi-insert-drive-file ml-1 "></i></h6>
               </button>
            </a>
         </div>
      </div>
      <table class="table datatable-basic">
         <thead>
            <tr>
               <th>Title</th>
               <th>Price</th>
               <th>Stock</th>
               <th>Category</th>
               <th>Gender</th>
               <th>Status</th>
               <th class="text-center">Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($results as $result) 
               <tr>
                  <td>{{$result->title}}</td>
                  <td>{{$result->price}}</td>
                  <td>{{$result->stock}}</td>
                  <td>{{$result->Category->name}}</td>
                  <td>{{$result->Gender->name}}</td>
                  @if ($result->is_active == 1)
                  <td><span class="badge badge-success">Active</span></td>
                  @else
                  <td><span class="badge badge-danger">Inactive</span></td>
                  @endif
                  <td class="text-center">
                     <div class="list-icons">
                        <div class="dropdown">
                           <a href="#" class="list-icons-item" data-toggle="dropdown">
                              <i class="icon-menu9"></i>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <p class="dropdown-item "><button type="button" class="w-100 h-100 text-left" style="background-color:transparent; border:none; outline:none;"  data-toggle="modal" data-target="#{{$result->id}}"><i class="mi-mode-edit mr-2"></i>Edit</button></p>
                              <a href="{{route('getCategoryDelete', ['id' => $result->id])}}" class="dropdown-item "><button type="button" style="background-color:transparent; border:none; outline:none;" ><i class="mi-delete mr-2"></i>Delete</button></a>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>   
</div>
@endsection