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
<script src="{{asset('assets/global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

@endsection
@section('page-name') Users List  @endsection
@section('content')
   <div class="row">
      <div class="card col-12">
         <div class="card-header header-elements-inline">
            <h5 class="card-title">Category</h5>
         </div>
         <table class="table datatable-basic">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>E-mail</th>
                  <th>Role</th>
                  <th class="text-center">Actions</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($results as $result) 
                  <tr >
                     <td class="text-capitalize">{{$result->name}}</td>
                     <td class="text-capitalize">{{$result->surname}}</td>
                     <td>{{$result->email}}</td>
                     <td class="text-capitalize">{{implode(',',$result->roles()->get()->pluck('name')->toArray())}}</td>
                     <td class="text-center">
                        <div class="list-icons">
                           <div class="dropdown">
                              <a href="#" class="list-icons-item" data-toggle="dropdown">
                                 <i class="icon-menu9"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                 <p class="dropdown-item "><button type="button" class="w-100 h-100 text-left" style="background-color:transparent; border:none; outline:none;"  data-toggle="modal" data-target="#{{$result->id}}"><i class="mi-mode-edit mr-2"></i>Edit</button></p>
                                 <form action="#" method="post">
                                 @csrf
                              <input name="id" type="text" class="d-none" value="{{$result->id}}">

                                 <p class="dropdown-item "><button type="submit" class="w-100 h-100 text-left" style="background-color:transparent; border:none; outline:none;"  ><i class="mi-mode-edit mr-2"></i>Delete</button></p>
                                </form>
                              </div>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <div id="{{$result->id}}" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title">Change Role </h5>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                           </div>
                           <form action="#" method="post">
                              @csrf
                              <input name="id" type="text" class="d-none" value="{{$result->id}}">
                              <div class="modal-body d-flex  mt-3">

                                 @foreach ($roles as $role)
                                    <div class="form-check mr-3 col-2">
                                        <label class="form-check-label text-capitalize d-flex">	
							    	        <input name="roles[]" type="checkbox" class="form-check-input"  value="{{$role->id}}" 
                                            {{$result->hasAnyRole($role->name)?'checked':''}}>{{$role->name}}
                                        </label>
                                    </div>
                                @endforeach   
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
      @if ($errors->any())
      <script>
       setTimeout(function(){
       $('.modals').trigger('click');
      }, 1000);
      </script>  
      @endif
   </div>
@endsection