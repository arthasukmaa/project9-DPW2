@extends('admin.template')
@section('content')

<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
			   </div class="card-header">
			        <div class="row">
			        	<div class="col-md-6">
			        		<h3> Detail Data User</h3>
			        	</div>
			        	<div class="card-body">
			        		<h2>{{$user->nama}}</h2>
			        		<hr>
			        		<p>
			        			 {{"@".$user->username}} |
			        			 Email : {{$user->email}} 
			        		</p>
			        		<p>
			        			 No Handphone : {{$user->detail->no_handphone}} 
			        		</p>
			        	</div>
			        </div>
			</div>
		</div>	
	</div>
	</div>
</div>

@endsection