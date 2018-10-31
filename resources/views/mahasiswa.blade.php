@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<table class="table table-primary">
				<thead>
					<tr>
						<th>nama</th>
						<th>nim</th>
						<th>tanggal lahir</th>
					</tr>
				</thead>
				<tbody>
					@foreach($mahasiswa as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->nim}}</td>
						<td>{{$data->tanggal_lahir}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection