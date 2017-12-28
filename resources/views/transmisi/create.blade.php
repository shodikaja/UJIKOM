@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/transmisis') }}">Transmisi</a></li>
				<li class="active">Tambah Transmisi</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Transmisi</h2>
				</div>
				<div class="panel-body">
				{!! Form::open(['url' => route('transmisis.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('transmisi._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection