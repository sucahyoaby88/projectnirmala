@extends('adminpage.dashboard')

@section('title', 'Edit')

@section('content')

@include('sweetalert::alert')

<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Edit</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('dashboard/'.$home->id.'/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
			<h4>Description</h4>
				<input name="description" type="text"  class="form-control" placeholder="Description" value="{{$home->description}}" required>
            </div>
			<div class="form-group">
				<h4>About</h4>
				<input id="about" type="hidden" name="about" value="{{$home->about}}">
  				<trix-editor input="about"></trix-editor>
            </div>
			<div class="form-group">
			<h4>Email</h4>
				<input name="email" type="text"  class="form-control" placeholder="Email" value="{{$home->email}}" required>
			</div>
			<div class="form-group">
			<h4>Location</h4>
				<input name="location" type="text"  class="form-control" placeholder="Location" value="{{$home->location}}" required>
            </div>
			<div class="form-group">
			<h4>Whatsapp</h4>
				<input name="whatsapp" type="text" class="form-control" placeholder="Whatsapp" value="{{$home->whatsapp}}" required>
            </div>
			<div class="form-group">
			<h4>Link Url Youtube</h4>
			<div class="form-group"> 
				<input name="linkyt" type="text" class="form-control" placeholder="Link url youtube" value="{{$home->linkyt}}">	 
            </div>
            <div class="text-center">
				<button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>

<script>

	document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
		
</script>

@endsection