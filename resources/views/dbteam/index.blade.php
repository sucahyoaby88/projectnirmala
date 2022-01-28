@extends('adminpage.dashboard')

@section('title', 'Database Team')

@section('content')

@include('sweetalert::alert')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database Team</h3>
		<div class="right">
		<a class="lnr lnr-plus-circle btn btn-primary" href="{{url ('dbteam/create')}}" role="button"> Tambah Data Team</a>
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($team))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Role</th>
					<th>Email</th>
					<th>Instagram</th>
					<th>Images</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($team as $t)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $t->name }}</td>
				<td>{{ $t->role }}</td>
				<td>{{ $t->email }}</td>
				<td>{{ $t->instagram }}</td>
				<td> <img src="{{asset('storage/'. $t->image)}}" alt="image_team" style= "width:100px"> </td>
        <td><a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('dbteam/' . $t->id . '/edit') }}"> Edit</a>
          <a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('dbteam/' . $t->id . '/delete') }}"> Delete</a>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
</div>
@endsection
