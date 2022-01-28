@extends('adminpage.dashboard')

@section('title', 'Edit Team')

@section('content')

@include('sweetalert::alert')

<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Edit Team</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('dbteam/'.$team->id.'/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
			<h4>Name</h4>
				<input name="name" type="text"  class="form-control" placeholder="Name" value="{{$team->name}}" required>
            </div>
			<div class="form-group">
			<h4>Role</h4>
				<input name="role" type="text"  class="form-control" placeholder="Role" value="{{$team->role}}" required>
            </div>
			<div class="form-group">
			<h4>Email</h4>
				<input name="email" type="text"  class="form-control" placeholder="Email" value="{{$team->email}}" required>
			</div>
			<div class="form-group">
			<h4>Instagram</h4>
				<input name="instagram" type="text" class="form-control" placeholder="Instagram" value="{{$team->instagram}}" required>
            </div>
			<div class="form-group">
			<h4>Image (potrait)</h4>
			    <input name="image" type="file" class="form-control" placeholder="Image">
            </div>
			<input type="hidden" name="oldImage" value="{{ $team->image }}">
            <div class="text-center">
				<button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>

@endsection