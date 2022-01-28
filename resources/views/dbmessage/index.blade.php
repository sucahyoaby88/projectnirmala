@extends('adminpage.dashboard')

@section('title', 'Database Admin')

@section('content')

@include('sweetalert::alert')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database Message</h3>
	</div>
	<div class="panel-body">
	@if (!empty($message_list))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
                    <th>Request Product</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($message_list as $m)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $m->name }}</td>
				<td>{{ $m->email }}</td>
                <td>{{ $m->reqproduct }}</td>
        <td><a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('dbmessage/' . $m->id . '/delete') }}"> Delete</a>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
</div>
@endsection
