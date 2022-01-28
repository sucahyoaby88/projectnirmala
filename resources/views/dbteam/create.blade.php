@extends('adminpage.dashboard')
@section('title', 'Tambah Anggota')

@section('content')

@include('sweetalert::alert')

<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah Anggota</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('dbteam/') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group"> 
                <label for="name" class="controllabel">Name</label> 
                <input name="name" type="text" class="form-control"> 
            </div>
            <div class="form-group"> 
                <label for="role" class="controllabel">Role</label> 
                <input name="role" type="text" class="form-control"> 
            </div>
			<div class="form-group"> 
                <label for="email" class="controllabel">Email</label> 
                <input name="email" type="email" class="form-control"> 
            </div>
			<div class="form-group"> 
                <label for="instagram" class="controllabel">Instagram</label> 
                <input name="instagram" type="text" class="form-control"> 
            </div>
            <div>
                <label for="image" class="control-label">Image (potrait)</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection