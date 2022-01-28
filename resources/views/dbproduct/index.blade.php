@extends('adminpage.dashboard')

@section('title', 'Database Product')

@section('content')

@include('sweetalert::alert')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database Product</h3>
		<div class="right">
		<a class="lnr lnr-plus-circle btn btn-primary" href="{{url ('dbproduct/create')}}" role="button"> Tambah Product </a>
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($product))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Description</th>
					<th>Images</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($product as $p)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $p->name }}</td>
				<td>{{ $p->description }}</td>
				<td> <img src="{{asset('storage/'. $p->image)}}" alt="image_product" style= "width:150px"> </td>
        <td><a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('dbproduct/' . $p->id . '/edit') }}"> Edit</a>
          <a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('dbproduct/' . $p->id . '/delete') }}"> Delete</a>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
</div>
@endsection
