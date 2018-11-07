@extends('layouts.main')

@section('title','Tambah Customer')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h2>Tambah Customer</h2>
				</div>
				<div class="body">
					<form method="post" action="{{route('customer.store')}}">
						
					<div class="row">
						<div class="col-md-6">
							@component('components.input',[
								'placeholder'=>'Nama Depan',
								'type'=>'text'
							])
							@endcomponent
						</div>
						<div class="col-md-6">
							@component('components.input',[
								'placeholder'=>'Nama Belakang',
								'type'=>'text'
							])
							@endcomponent
						</div>
					</div>
					@component('components.input',[
								'placeholder'=>'Nama Depan',
								'type'=>'text'
							])
							@endcomponent
					<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection