@extends('adminpage.dashboard')

@section('title', 'Database Home')

@section('content')

@include('sweetalert::alert')
<div class="panel">
	<div class="panel-heading">
		<h3>Data Home
			@if (!empty($home))
			<p class="right">
				<a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('dashboard/' . $home->id . '/edit') }}"> Edit</a>
			</p>
		</h3>
		
	</div>
</div>


	<!-- PANEL DEFAULT -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Description</h3>
			<div class="right">
				<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
				
			</div>
		</div>
		<div class="panel-body">
			<p>{{ $home->description }}</p>
		</div>
	</div>
	<!-- END PANEL DEFAULT -->


	<!-- PANEL DEFAULT -->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">About</h3>
			<div class="right">
				<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
				
			</div>
		</div>
		<div class="panel-body">
			<p>{!! $home->about !!}</p>
		</div>
	</div>
	<!-- END PANEL DEFAULT -->

	<div class="col-md-4">
		<!-- PANEL DEFAULT -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Email Company</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					
				</div>
			</div>
			<div class="panel-body">
				<p>{{ $home->email }}</p>
			</div>
		</div>
		<!-- END PANEL DEFAULT -->
	</div>

	<div class="col-md-4">
		<!-- PANEL DEFAULT -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Location Company</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					
				</div>
			</div>
			<div class="panel-body">
				<p>{{ $home->location }}</p>
			</div>
		</div>
		<!-- END PANEL DEFAULT -->
	</div>

	<div class="col-md-4">
		<!-- PANEL DEFAULT -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Whatsapp Company</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					
				</div>
			</div>
			<div class="panel-body">
				<p>{{ $home->whatsapp }}</p>
			</div>
		</div>
		<!-- END PANEL DEFAULT -->
	</div>

	@if($home->linkyt)
	<div class="col-md-6 col-md-offset-3">
		<!-- PANEL DEFAULT -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Link Youtube Company</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					
				</div>
			</div>
			<div class="panel-body text-center">
				<p>{{ $home->linkyt }}</p><br/>
				<iframe width="450" height="250" src="{{$home->getEmbed()}}" frameborder="0" allowfullscreen></iframe></td>
			</div>
		</div>
		<!-- END PANEL DEFAULT -->
	</div>
	@endif

</div>		

@endif

@endsection
