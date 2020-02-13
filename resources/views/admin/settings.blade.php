@extends('admin.layout.main') 
@section('head')
<script src="{{asset('assets/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/form_layouts.js')}}"></script>
@endsection
@section('page-name') Site Settings  @endsection
@section('content')
    <div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header header-elements-inline">
					<h5 class="card-title">Settings</h5>
				</div>
				<div class="card-body">
					<form action="#" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Old Logo:</label>
							<div class="mr-3">
								<a href="#">
									<img src="{{asset('img/uploads/'.$settings->logo.'')}}" width="160" height="160" class="rounded-round" alt="">
								</a>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Change:</label>
							<div class="col-lg-9">
								<input type="file" class="form-input-styled" name="logo">
								<span class="form-text text-muted">Accepted formats: png, jpg. Max file size 2Mb</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Site title:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{$settings->title}} " name="title">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Key Words:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{$settings->keywords}}" name="keyword">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Phone 1:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{$settings->phone1}}" name="phone1">
							</div>
							</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Phone 2:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{$settings->phone2}}" name="phone2">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Address:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{$settings->address}}" name="address">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">E-mail:</label>
							<div class="col-lg-9">
								<input type="email" class="form-control" value="{{$settings->email}}" name="email">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Instagram:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{$settings->instagram}}" name="instagram">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Facebook:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{$settings->facebook}}" name="facebook">
							</div>
						</div>
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
@endsection
