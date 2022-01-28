@extends('adminpage.dashboard')

@section('title', 'Tambah Admin')

@section('content')

@include('sweetalert::alert')
<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah Admin</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">	
    <form action="{{ url('dbadmin/') }}" method="post">
            @csrf
			<div class="form-group"> 
                <label for="username" class="controllabel">Username</label> 
                <input name="username" type="text" class="form-control" placeholder="Username" required> 
            </div>
			<div class="form-group"> 
                <label for="password" class="controllabel">Password</label> 
                <input name="password" type="password" class="form-control" placeholder="Password minimal 8 character" required> 
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection