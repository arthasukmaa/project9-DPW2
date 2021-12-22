@extends('admin.template')
@section('content')

	<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
			   </div class="card-header">
			        <div class="row">
			        	<div class="col-md-10">
			        		<h3>Data User</h3>
			        	</div>
			        	<div class="col-md-2">
			        		<a href="{{url('admin/user/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus" data-feather="plus"></i> Tambah User</a>
			        	</div>
			        	@include('admin.utils.notif')
			        	<div class="card-body">
			        		<table class="table">
			        			<thead>
			        				<th>No</th>
			        				<th>Aksi</th>
			        				<th>Username</th>
			        				<th>Nama</th>
			        				<th>Jenis Kelamin</th>
			        				<th>Email</th>
			        			</thead>
			        			<tbody>
			        				@foreach($list_user as $user)
			        				<tr>
			        					<td>{{$loop->iteration}}</td>
			        					<td>
			        						<div class="btn-group">
			        						<a href="{{url('admin/user', $user->id)}}" class="btn btn-dark" ><i  class="fa fa-info" data-feather="info"></i></a>
			        						<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"data-feather="edit" ></i></a>
			        						@include('admin.utils.delete', ['url' => url('admin/user', $user->id)])
                                            </div>
			        					</td>
			        					<td>{{$user->username}}</td>
			        					<td>{{$user->nama}}</td>
			        					<td>{{$user->jenis_kelamin_string}}</td>
			        					<td>{{$user->email}}</td>
			        				</tr>
			        				@endforeach
			        			</tbody>
			        		</table>
			        	</div>
			        </div>
			   </div>
			</div>	
		</div>
	</div>
</div>

@endsection