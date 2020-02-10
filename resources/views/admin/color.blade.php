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
            <h5 class="card-title">Color</h5>
            @if(Session::has('success-message'))
               <h2 style="color: green">
                     {{ Session::get('success-message') }}
                     @php Session::forget('success-message'); @endphp
               </h2>
            @endif
            <div class="header-elements">
               <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#insert">
                  <h6 class="mb-0">Add New Color <i class="mi-insert-drive-file ml-1 "></i></h6>
               </button>
            </div>
         </div>
         <div id="insert" class="modal fade @if ($errors->any()) show @endif" tabindex="-1" style="@if ($errors->any()) display: block; padding-right: 17px; @else display: none;@endif " aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Add Color </h5>
                     <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <form action="#" method="post">
                     @csrf
                     <input name="id" type="text" class="d-none">
                     <div class="modal-body">
                        <div class="form-group col-5 p-0">
                           @if ($errors->any())
                              @foreach ($errors->all() as $error)
                                 <p class="h5" style="color: #BD2130">{{ $error }}</p>
                              @endforeach
                           @endif
                        </div>
                        <div class="form-group col-5 p-0">
                           <label>Color Name</label>
                           <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                           <label class="d-block">Color code</label>
                           <div class="d-flex">
                              <input type="text"  class="form-control my-colorpicker-event-hide " data-preferred-format="HLS" data-fouc="" style="display: none;">
                              <input type="text" name="code" class=" ml-1 col-3 form-control my-input" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="d-block">Status</label>
                           <select name="is_active" class="form-control select-fixed-single select2-hidden-accessible"  tabindex="-1" aria-hidden="true">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                           </select>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-primary">Save</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <table class="table datatable-basic">
            <thead>
               <tr>
                  <th>Color Name</th>
                  <th>Color Code</th>
                  <th>Visual</th>
                  <th>Status</th>
                  <th class="text-center">Actions</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($results as $result) 
                  <tr>
                     <td>{{$result->name}}</td>
                     <td>{{$result->code}}</td>
                     <td>
                        <div class="d-inline-block">
                           <input type="text" class="form-control my-colorpicker-event-hide colorpicker-disabled" value="{{$result->code}}" data-fouc="" style="display: none;">
                           <div class="my-input d-none"></div>
                        </div>
                     </td>
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
                                 <a href="{{route('getColorDelete', ['id' => $result->id])}}" class="dropdown-item "><button type="button" style="background-color:transparent; border:none; outline:none;" ><i class="mi-delete mr-2"></i>Delete</button></a>
                              </div>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <div id="{{$result->id}}" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title">Change Color </h5>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                           </div>
                           <form action="#" method="post">
                              @csrf
                              <input name="id" type="text" class="d-none" value="{{$result->id}}">
                              <div class="modal-body">
                                 <div class="form-group col-5 p-0">
                                    <label>Color Name</label>
                                    <input name="name" type="text" class="form-control" value="{{$result->name}}">
                                 </div>
                                 <div class="form-group mt-3">
                                    <label class="d-block">Color code</label>
                                    <div class="d-flex">
                                       <input type="text"  class="form-control my-colorpicker-event-hide " data-preferred-format="HLS" data-fouc="" style="display: none;">
                                       <input type="text" name="code" class=" ml-1 col-3 form-control my-input" value="{{$result->code}}">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="d-block">Status</label>
                                    <select name="is_active" class="form-control select-fixed-single select2-hidden-accessible"  tabindex="-1" aria-hidden="true">
                                       <option @if($result->is_active==1) selected @endif  value="1">Active</option>
                                       <option @if($result->is_active==0) selected  @endif  value="0">Inactive</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                 <button type="submit" class="btn bg-primary">Save</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               @endforeach
            </tbody>
         </table>
      </div>
      @if ($errors->any())<div class="modal-backdrop fade show"></div>  @endif
   </div>
@endsection