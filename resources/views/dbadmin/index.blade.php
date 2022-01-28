@extends('adminpage.dashboard')

@section('title', 'Database Admin')

@section('content')

@include('sweetalert::alert')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database Admin</h3>
		<div class="right">
		<a class="lnr lnr-plus-circle btn btn-primary" href="{{url ('dbadmin/create')}}" role="button"> Tambah Data Admin</a>
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($admin_list))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Level</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($admin_list as $adm)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $adm->username }}</td>
				<td>{{ $adm->level }}</td>
        <td><a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('dbadmin/' . $adm->id . '/edit') }}"> Edit</a>
          <a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('dbadmin/' . $adm->id . '/delete') }}"> Delete</a>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
</div>
@endsection
