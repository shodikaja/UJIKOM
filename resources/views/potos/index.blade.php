@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row wow fadeIn">
		<h1>Selamat Datang Di Menu Poto</h1>
		<div class="col-sm-12">
			<div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
				<div class="panel panel-default">
					<div id="headingOne" role="tab" class="panel-heading">
						<h4  class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Poto</a></h4>
					</div>
					<div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<p> <a class="btn btn-primary" href="{{ route('potos.create') }}">Tambah</a> </p>
							{!! $html->table(['class'=>'table-striped']) !!}
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div id="headingTwo" role="tab" class="panel-heading">
						<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Lebih Lengkap</a></h4>
					</div>
					<div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
					{{-- beritanya --}}
						<section id="news">
							<div class="container">
								<h3 class="pull-left">Poto</h3>
								<div class="clearfix"></div>
								<div class="row grid-pad">
									@foreach($potos as $data)
									<div class="col-sm-4"><a href="news-single-sidebar.html"><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block">
										<h5></h5></a>
										{{-- @foreach($mobile as $data)
										<p>{{$data->nama_mobil}}</p>
										@endforeach --}}
										{{-- <a class="btn btn-default" href="{{route('show.show',$data->id)}}">Read more</a> --}}
									</div>
									@endforeach       
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="panel panel-default">
					<div id="headingThree" role="tab" class="panel-heading">
						<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Collapsible Group Item #3</a></h4>
					</div>
					<div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
						<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection
