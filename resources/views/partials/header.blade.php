<header class="top">
			<div class="header-area ptb-18 header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-xs-12">
							<div class="logo">
								<a href="index.html"><img src="{{asset('img/logo/' . $header[0]->logo )}}" alt="COFFEE" /></a>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
                            <div class="content-wrapper">
                                <!-- Main Menu Start -->
                                <div class="main-menu text-center">
                                    <nav>
                                        <ul>
                                            <li><a href="{{route('home')}}">{{$header[0]->li1}}</a></li>
                                            <li><a href="{{route('about-us')}}">{{$header[0]->li2}}</a></li>
                                            <li><a href="{{route('classes')}}">{{$header[0]->li3}}</a></li>
                                            <li><a href="{{route('gallery')}}">{{$header[0]->li4}}</a></li>
                                            <li><a href="{{route('contact')}}">{{$header[0]->li5}}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md"></div>
                                <!-- Main Menu End -->
                            </div>
						</div>
						<div class="col-md-4 col-xs-12" style="padding: 15px">

							@auth
									
										<a class=" banner-btn nav-link py-3 px-0 px-lg-3 rounded" href="/backoffice">Dashboard</a>
									
									
										{{-- LOGOUT --}}
										<form method="POST" class="nav-link py-3 px-0 px-lg-3 rounded" action="{{ route('logout') }}">
											@csrf
											<x-dropdown-link :href="route('logout')"
												onclick="event.preventDefault();
															this.closest('form').submit();">
											{{ __('Log Out') }}
											</x-dropdown-link>
										</form>
									
								@else
									
										<a class=" banner-btn nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">Log in</a>
									
								@if (Route::has('register'))
									
										<a class="  banner-btn  nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') }}">Register</a>
									
								@endif
							@endauth
						</div>
					
					</div>
				</div>
			</div>
		</header>