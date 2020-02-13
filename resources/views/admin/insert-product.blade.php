@extends('admin.layout.main') 
@section('head')
<script src="{{asset('assets/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/form_layouts.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/form_checkboxes_radios.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/forms/styling/switch.min.js')}}"></script>
@endsection
@section('page-name') <a href="{{route('getHomeAdmin')}}" class="breadcrumb-item d-inline">Product</a> <span class="mx-1 "> / </span>   Add @endsection
@section('content')
    <div class="row">
        <div class="card col-12">
			<div class="card-header header-elements-inline">
				<h5 class="card-title">New Product</h5>
			</div>
			<div class="card-body ">
				<form action="#" method="post" enctype="multipart/form-data" class="d-flex flex-wrap">
                    @csrf
					<div class="form-group col-6">
						<label> Product Title:</label>
						<input required type="text" name="title" class="form-control" placeholder="Enter Product Title" >
					</div>

                    <div class="form-group col-6">
						<label> Product Price:</label>
						<input required type="text" name="price" class="form-control" placeholder="Enter Product Price" >
					</div>

                    <div class="form-group col-12">
						<label>Abour Product:</label>
						<textarea required rows="5" cols="5" class="form-control" placeholder="Enter your about product here" name="text"></textarea>
					</div>

					<div class="form-group col-4">
						<label> Product category:</label>
						<select  class="form-control form-control-select2" name="category" data-fouc>
                            <option value="">Select</option>		
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>		
                            @endforeach		
						</select>
					</div>

                    <div class="form-group col-4">
						<label> Product status:</label>
						<select class="form-control form-control-select2" name="is_active" data-fouc>
                            <option value="">Select</option>		
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
						</select>
					</div>

                    <div class="form-group col-4">
						<label>Count of product</label>
						<input required class="form-control" type="number" name="count" placeholder="Enter count of product">
					</div>

                    <div class="form-group col-12">
                        <label class="font-weight-semibold">Product images:</label>
						<input required type="file" class="file-input" multiple="multiple" data-fouc name="images[]">
                    </div>

                    <div class="form-group col-6   d-flex flex-wrap">
                        <label class="col-12 p-0"> Product Size:</label>
                        @foreach ($sizes as $size)
						    <div class="form-check mr-3">
							    <label class="form-check-label">
							    	<input type="checkbox" class="form-check-input-styled" name="sizes[]" data-fouc value="{{$size->name}}">
                                    <p class="text-capitalize">{{$size->name}}</p>
							    </label>
						    </div>
                        @endforeach
					</div>
                               
					<div class="form-group col-6">
						<label class="d-block">Gender:</label>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
								<input  type="radio" class="form-input-styled" name="gender" value="1" checked data-fouc>
								Men
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
								<input  type="radio" class="form-input-styled" name="gender" value="2"  data-fouc>
								Women
							</label>
						</div>
					
					</div> 

                    <div class="form-group col-12 d-flex flex-wrap">
                        <label class="col-12 p-0"> Product Color:</label>
                        @foreach ($colors as $color)
						    <div class="form-check mr-3 col-2">
							    <label class="form-check-label text-capitalize d-flex">
										<input type="checkbox" class="form-check-input-styled " name="colors[]" data-fouc value="{{$color->id}}">{{$color->name}}
										<div  class="ml-2  rounded-circle d-block" style="height:20px;width:20px;background-color:{{$color->code}}; border:1px solid black;"></div>
								</label>
						    </div>
                        @endforeach              
					</div>
                    <div class="col-12">
                        <a href="{{route('getColor')}}" class="float-right">
                            <button type="button" class="btn btn-primary text-center" >
                                Add New Color <i class="mi-insert-drive-file ml-1 "></i>
                            </button>
                        </a>  
                    </div>
					<div class="col-12 mt-5">
						<button type="submit" class="btn btn-primary float-right"><h5 class="m-0">Add product <i class="icon-paperplane ml-2"></i></h5> </button>
					</div>

				</form>
			</div>
		</div>
    </div>
@endsection