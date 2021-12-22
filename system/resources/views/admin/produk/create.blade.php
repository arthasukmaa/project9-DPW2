@extends('admin.template')
@section('content')

<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
			   </div class="card-header">
			        <div class="row">
			        	<div class="col-md-6">
			        		<h3> Tambah Data Produk</h3>
			        	</div>
			        	<div class="card-body">
			        		<form action="{{url('admin/produk')}}" method= "post">
			        			@csrf
			        		   <div class="form-group">
			        			    <label for="" class="control-label">Nama</label>
			        			    <input type="text" class="form-control" name="Nama" accept=".png">
			        		</div>
			        		<div class="form-group">
			        			    <label for="" class="control-label">stok</label>
			        			    <input type="text" class="form-control" name="stok">
			        		</div>
			        		<div class="form-group">
			        			<label for="" class="control-label">Harga</label>
			        			<input type="text" class="form-control" name="Harga">
			        		</div>
			        		<div class="form-group">
			        			<label for="" class="control-label">Deskripsi</label>
			        			<textarea name="Deskripsi" class="form-control"></textarea>
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