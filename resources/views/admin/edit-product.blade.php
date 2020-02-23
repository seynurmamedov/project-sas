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
@section('page-name') <a href="{{route('getHomeAdmin')}}" class="breadcrumb-item d-inline">Product</a> <span class="mx-1 "> / </span> Edit @endsection
@section('content')
    <div class="row">
        <div class="card col-12">
			<div class="card-header header-elements-inline">
				<h5 class="card-title">New Product</h5>
			</div>
			<div class="card-body ">
            @foreach($results as $result)
				<form action="#" method="post" enctype="multipart/form-data" class="d-flex flex-wrap">
                    @csrf
					<div class="form-group col-6">
						<label>Product Title:</label>
						<input required type="text" name="title" class="form-control" value="{{$result->title}}" >
					</div>

                    <div class="form-group col-6">
						<label>Product Price:</label>
						<input required type="text" name="price" class="form-control" value="{{$result->price}}" >
					</div>

                    <div class="form-group col-12">
						<label>Abour Product:</label>
						<textarea required rows="5" cols="5" class="form-control" name="text">{{$result->text}}</textarea>
					</div>

					<div class="form-group col-4">
						<label> Product category:</label>
						<select  class="form-control form-control-select2" name="category" data-fouc>
                            <option value="">Select</option>		
                            @foreach ($categories as $category)
                                <option @if($result->cat_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>		
                            @endforeach		
						</select>
					</div>

                    <div class="form-group col-4">
						<label> Product status:</label>
						<select class="form-control form-control-select2" name="is_active" data-fouc>
                            <option value="">Select</option>		
                            <option @if($result->is_active==1) selected @endif  value="1">Active</option>
                            <option @if($result->is_active==0) selected @endif  value="0">Inactive</option>
						</select>
					</div>

                    <div class="form-group col-4">
						<label>Count of product</label>
						<input required class="form-control" type="number" value="{{$result->stock}}" name="count">
					</div>
					<div class="form-group col-12 row ">
							<label class="col-12 col-form-label">Images:</label>
							<div class="mr-3 col-2 position-relative">
								<img src="{{asset('img/uploads/'.$result->preview.'')}}"  width="100%" class="rounded" alt="">
							</div>
					</div>
					<div class="form-group col-12">
                        <label class="font-weight-semibold">Product preview images:</label>
						<input  type="file" class="file-input" multiple="multiple" data-fouc name="preview">
                    </div>
					<div class="form-group col-12 row ">
							<label class="col-12 col-form-label">Images:</label>
							@foreach($result->Images as $image)
							<div class="mr-3 col-2 position-relative">
								<i class="delete-img mi-close mr-3 mi-2x position-absolute" data-id="{{$image->id}}" style="cursor:pointer;"></i>
								<img src="{{asset('img/uploads/'.$image->name.'')}}"  width="100%" class="rounded" alt="">
							</div>
							@endforeach
					</div>
					
                    <div class="form-group col-12">
                        <label class="font-weight-semibold">Product images:</label>
						<input  type="file" class="file-input"  multiple="multiple" data-fouc name="images[]">
                    </div>

                    <div class="form-group col-6 d-flex flex-wrap">
                        <label class="col-12 p-0"> Product Size:</label>
                        @foreach ($sizes as $size)
						    <div class="form-check mr-3">
							    <label class="form-check-label">
                                
							    	<input @foreach ($result->Size as $sizes) @if($sizes->name==$size->name) checked @endif  @endforeach   type="checkbox" class="form-check-input-styled" name="sizes[]" data-fouc value="{{$size->name}}">
                               
                                    <p class="text-capitalize">{{$size->name}}</p>
							    </label>
						    </div>
                        @endforeach
					</div>
                               
					<div class="form-group col-6">
						<label class="d-block">Gender:</label>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
								<input @if($result->gender_id==1) checked @endif  type="radio" class="form-input-styled" name="gender" value="1"  data-fouc>
								Men
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
								<input @if($result->gender_id==2) checked @endif type="radio" class="form-input-styled" name="gender" value="2"  data-fouc>
								Women
							</label>
						</div>
					
					</div> 

                    <div class="form-group col-12 d-flex flex-wrap">
                        <label class="col-12 p-0"> Product Color:</label>
                        @foreach ($colors as $color)
						    <div class="form-check mr-3 col-2">
							    <label class="form-check-label text-capitalize d-flex">	
							    	<input type="checkbox" class="form-check-input-styled image-check" name="colors[]" data-fouc value="{{$color->id}}"
										@foreach ($result->Color as $color_id)
											@if ($color_id->color_id == $color->id) checked	@endif 
										@endforeach>
                                    {{$color->name}}
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
						<button type="submit" class="btn btn-primary float-right"><h5 class="m-0">Edit product <i class="icon-paperplane ml-2"></i></h5> </button>
					</div>

				</form>
			   @endforeach 
			</div>
		</div>
    </div>
   @section('footer')
   <script>
      $(".delete-img").click(function(){
		var id = $(this).data('id');
        if(confirm("Are you sure you want to Delete this img?"))
        {		
			  $(this).parent().fadeOut()
              $.ajax({
                 url:"{{route('getImageDelete')}}",
                 mehtod:"get",
                 data:{id:id},
                 success:function(datas)
                 {
					alert(data)
                 }
              })
        }
        else
        {
              return false;
        }
	}); 
   </script>
   @endsection
@endsection