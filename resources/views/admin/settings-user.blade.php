@extends('admin.layout.main') 
@section('head')
<script src="{{asset('assets/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script src="{{asset('assets/global_assets/js/demo_pages/form_layouts.js')}}"></script>
@endsection
@section('page-name') Account settings  @endsection
@section('content')
    <div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header header-elements-inline">
					<h5 class="card-title">Account settings</h5>
				</div>
				<div class="card-body">
					<form action="#" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Old Logo:</label>
							<div class="mr-3">
								<a href="#">
									<img src="{{asset('img/uploads/'.Auth::user()->prof_img.'')}}" width="160" height="160" class="rounded-round" alt="">
								</a>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Change:</label>
							<div class="col-lg-9">
								<input type="file" class="form-input-styled" name="prof_img">
								<span class="form-text text-muted">Accepted formats: png, jpg. Max file size 2Mb</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Name:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{Auth::user()->name}} " name="name">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Surname:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" value="{{Auth::user()->surname}} " name="surname">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">E-mail:</label>
							<div class="col-lg-9">
								<input type="email" class="form-control" value="{{Auth::user()->email}}" name="email">
							</div>
						</div>
                        <input type="text" class="d-none" value="{{Auth::user()->id}}">
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
@endsection
