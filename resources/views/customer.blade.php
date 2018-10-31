@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Tabel Customer</h3>
				</div>
				<div class="box-body">
					<table class="table">
						<thead>
							<tr>
								<th>Nama </th>
								<th>Store Manager ID</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							@foreach($customer as $data)
								<tr>
									<td>{{$data->first_name}} {{$data->last_name}}</td>
									<td>{{$data->store->manager_staff_id}}</td>
									<td>{{$data->email}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection