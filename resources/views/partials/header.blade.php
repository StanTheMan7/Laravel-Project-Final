<header class="top">
			<div class="header-area ptb-18 header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-xs-12">
							<div class="logo">
								<a href="index.html"><img src="{{asset('img/logo/logo.png')}}" alt="COFFEE" /></a>
							</div>
						</div>
						<div class="col-md-8 col-xs-12">
                            <div class="content-wrapper">
                                <!-- Main Menu Start -->
                                <div class="main-menu text-center">
                                    <nav>
                                        <ul>
                                            <li><a href="{{route('home')}}">Home</a></li>
                                            <li><a href="{{route('about-us')}}">About us</a></li>
                                            <li><a href="{{route('classes')}}">classes</a></li>
                                            <li><a href="{{route('gallery')}}">gallery</a></li>
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md"></div>
                                <!-- Main Menu End -->
                            </div>
						</div>
						<div class="col-md-2 hidden-sm hidden-xs">
						    <div class="header-contact text-right">
						        <a class="banner-btn" data-text="contact" href="{{route('contact')}}"><span>contact</span></a>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</header>