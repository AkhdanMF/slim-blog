@if (Session::has('success'))
	<div class="alert alert-success" role="alert">
		<strong>Success:</strong> {{Session::get('success')}}
	</div>
@endif

@if (Session::has('danger'))
	<div class="alert alert-danger" role="alert">
		<strong>Success:</strong> {{Session::get('danger')}}
	</div>
@endif

@if (count($errors) > 0)
	@foreach ($errors->all() as $error)
		<div class="alert alert-danger">
			<li>{{$error}}</li>
		</div>
	@endforeach
@endif
