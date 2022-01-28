@extends('adminpage.dashboard')
@section('title', 'Tambah Product')

@section('content')

@include('sweetalert::alert')

<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah Product</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('dbproduct/') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group"> 
                <label for="name" class="controllabel">Name</label> 
                <input name="name" type="text" class="form-control"> 
            </div>
			<div class="form-group"> 
                <label for="description" class="controllabel">Description</label> 
                <input name="description" type="text" class="form-control"> 
            </div>
            <div>
                <label for="image" class="control-label">Image (landscape)</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection