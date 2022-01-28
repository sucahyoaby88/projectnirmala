@extends('adminpage.dashboard')

@section('title', 'Edit Admin')

@section('content')

@include('sweetalert::alert')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Edit User</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
	<form action="{{ url('dbadmin/'.$admin->id.'/update') }}" method="post" enctype="multipart/form-data">
            @csrf
			<div class="form-group">
			<h4>Username</h4>
				<input name="username" type="text" class="form-control" placeholder="Username" value="{{$admin->username}}" required>
			</div>
			<div class="form-group">
			<h4>Password</h4>
				<input name="password" type="password" class="form-control" placeholder="Password minimal 8 character" required>
            </div>
            <div class="text-center">
				<button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>

@endsection