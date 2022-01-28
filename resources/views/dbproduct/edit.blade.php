@extends('adminpage.dashboard')

@section('title', 'Edit Product')

@section('content')

@include('sweetalert::alert')

<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Edit Product</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('dbproduct/'.$product->id.'/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
			<h4>Name </h4>
				<input name="name" type="text"  class="form-control" placeholder="Name" value="{{$product->name}}" required>
            </div>
			<div class="form-group">
			<h4>Description</h4>
				<input name="description" type="text" class="form-control" placeholder="Description" value="{{$product->description}}" required>
            </div>
			<div class="form-group">
			<h4>Image (landscape)</h4>
			    <input name="image" type="file" class="form-control" placeholder="Image">
            </div>
			<input type="hidden" name="oldImage" value="{{ $product->image }}">
            <div class="text-center">
				<button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>

@endsection