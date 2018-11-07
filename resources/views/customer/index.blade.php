@extends('layouts.main')
@section('title','Cusomter')
@section('content')
    <a href="{{route('customer.create')}}" class="btn btn-lg btn-primary"><i class="material-icons">person_add</i>&nbsp; Tambah Customer</a>
    <br><br>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
                        <div class="header">
                            <h2>
                                CUSTOMER TABLES
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>EMAIL</th>
                                        <th>PILIHAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $data)
                                    	<tr>
                                    		<td>{{$data->first_name}}</td>
                                    		<td>{{$data->last_name}}</td>
                                    		<td>{{$data->email}}</td>
                                            <td>
                                                <a target="ajax-modal" href="#" class="btn btn-warning btn-xs"><i class="material-icons">edit</i>&nbsp; Edit</a>
                                                <a target="ajax-modal" href="{{route('customer.show',[$data->customer_id])}}" class="btn btn-danger btn-xs"><i class="material-icons">delete</i>&nbsp; Delete</a>
                                            </td>
                                    	</tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $customer->render() !!}
                        </div>
                    </div>
		</div>
	</div>
@endsection

@section('js')
    
@endsection