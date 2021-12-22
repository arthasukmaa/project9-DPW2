@extends('admin.template')
@section('content')

	<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
			   </div class="card-header">
			        FILTER
			        <div class="card-body">
			        	<form action="{{url('admin/produk/filter')}}" method="post">
			        		@csrf
			        		<div class="form-group">
			        			<label for="" class="control-label">Nama</label>
			        			<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
			        			</div>
			        			<div class="form-group">
			        			<label for="" class="control-label">stok</label>
			        			<input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
			        			</div>
			        			<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							<label for="" class="control-label"> Harga Min</label>
							<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
						</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
							<label for="" class="control-label"> Harga Max</label>
							<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
						</div>
							</div>
			        		<div class="col-md-6">
			        		<button class="btn btn-primary float-right"><i class="fa fa-search" data-feather="search"></i> Filter</button>
			        	</form>
			        </div>
			        </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-10">
			        		<h3>Data Produk</h3>
			        	</div>
			        	<div class="col-md-2">
			        		<a href="{{url('admin/produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus" data-feather="plus"></i> Data Produk</a>
			        	</div>
			        	@include('admin.utils.notif')
			        	<div class="card-body">
			        		<table class="table">
			        			<thead>
			        				<th>No</th>
			        				<th>Aksi</th>
			        				<th>Nama</th>
			        				<th>Stok</th>
			        				<th>Harga</th>
			        			</thead>
			        			<tbody>
			        				@foreach($list_produk as $produk)
			        				<tr>
			        					<td>{{$loop->iteration}}</td>
			        					<td>
			        						<div class="btn-group">
			        						<a href="{{url('admin/produk', $produk->id)}}" class="btn btn-dark" ><i  class="fa fa-info" data-feather="info"></i></a>
			        						<a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"data-feather="edit" ></i></a>
			        						@include('admin.utils.delete', ['url' => url('admin/produk', $produk->id)])
                                            </div>
			        					</td>
			        					<td>{{$produk->nama}}</td>
			        					<td>{{$produk->stok}}</td>
			        					<td>{{$produk->harga}}</td>
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