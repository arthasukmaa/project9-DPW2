@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp



<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">KomStore</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>

					<li class="{{checkRouteActive('admin/beranda')}}">
						<a class="sidebar-link" href="{{url('admin/beranda')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">beranda</span>
            </a>
					</li>

					<li class="{{checkRouteActive('admin/produk')}}">
						<a class="sidebar-link" href="{{url('admin/produk')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Produk</span>
            </a>
					</li>

					<li class="{{checkRouteActive('admin/profil')}}">
						<a class="sidebar-link" href="{{url('admin/profil')}}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
            </a>
					</li>

						<li class="{{checkRouteActive('admin/user')}}">
						<a class="sidebar-link" href="{{url('admin/user')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">User</span>
            </a>
					</li>


					<li class="{{checkRouteActive('admin/kategori')}}">
						<a class="sidebar-link" href="{{url('admin/kategori')}}">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Kategori</span>
            </a>
					</li>


					<li class="{{checkRouteActive('sign in')}}">
						<a class="sidebar-link" href="{{url('login')}}">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="{{checkRouteActive('register')}}">
						<a class="sidebar-link" href="{{url('register')}}">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Register</span>
            </a>
					</li>

				

					</ul>
			</div>
		</nav>