@extends('admin.template')
@section('content')

<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
			   </div class="card-header">
			        <div class="row">
			        	<div class="col-md-6">
			        		<h3> Tambah Data User</h3>
			        	</div>
			        	<div class="card-body">
			        		<form action="{{url('admin/user')}}" method= "post">
			        			@csrf
			        		   <div class="form-group">
			        			    <label for="" class="control-label">Nama</label>
			        			    <input type="text" class="form-control" name="nama">
			        		</div>
			        		<div class="form-group">
			        			    <label for="" class="control-label">Username</label>
			        			    <input type="text" class="form-control" name="username">
			        		</div>
			        		<div class="form-group">
			        			    <label for="" class="control-label">Email</label>
			        			    <input type="email" class="form-control" name="email">
			        		</div>
			        		<div class="form-group">
			        			    <label for="" class="control-label">Password</label>
			        			    <input type="password" class="form-control" name="password">
			        		</div>
			        		<div class="form-group">
			        			<label for="" class="control-label">NO HP</label>
			        			<input type="text" class="form-control" name="no_handphone" >
			        		</div>
			        		
			        		<button class="btn btn-dark float-right"><i class="fa fa-save" data-feather="save"></i> Simpan</button>

			        	</form>
			        	</div>
			        </div>
			</div>
		</div>	
	</div>
	</div>
</div>

@endsection