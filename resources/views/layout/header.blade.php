<header id="header" class="header intelligent">
	<div class="container">

		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="reserve-form modal-dialog" style="bottom: unset;">
            <div class="">
                <div class="row reserve-form-wrap">
                    {{-- <div class="form-head clearfix modal-header">
                    	<button type="button" class="close" data-dismiss="modal" style="color: #ffffff; opacity: 1;">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
                        <div class="location">
                            <h2>LOGIN</h2>
                        </div>
                    </div> --}}

                    <form method="POST" action="{{ route('login') }}">
                    	@csrf
                        <div class="row">
                            <div class="">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <div class="input-wrap clearfix">
                                    <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" required autofocus>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>

                                    @if ($errors->has('email'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
                               		@endif
                                </div>
                                <label>Password</label>
                                <div class="input-wrap clearfix">
                                    <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                                    <i class="fa fa-key" aria-hidden="true"></i>

                                    @if ($errors->has('password'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
                               		@endif
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember">
                        <label class="check" for="remember"><span class="check-box"></span> {{ __('Remember Me') }} </label>
                        <div class="">
	                        <button class="find-car" type="submit">
	                            <i class="fa fa-sign-in" aria-hidden="true"></i>{{ __('Login') }}
	                        </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        </div>

		<div class="row ">
			<div class="col-xs-12">
				<div class="header-cont clearfix">
					<a href="{{ URL::to('/') }}" class="logo"> <img src="{{ URL::to('/') . '/' . $site_settings['site_logo'] }}" alt=""/> </a>
					{{-- <a href="index.html" class="logo"> <img src="{{ asset('images/logo.png') }}" alt=""/> </a> --}}
					<div class="header-info">
						<div class="social-content clearfix">
							<div class="contact-det hidden-xs">
								<ul>
									<li>
										<a href="tel:{{$site_settings['phone_number']}}">{{$site_settings['phone_number']}} </a>/
									</li>
									<li>
										<a href="mailto:{{$site_settings['clients_email']}}">{{$site_settings['clients_email']}}</a>
									</li>
								</ul>
							</div>
							<div class="social-det">
								<ul>
									@foreach($site_settings['site_contacts'] as $key => $value)
										<li>
											<a href="{{$value}}"><i class="fa fa-{{$key}}" aria-hidden="true"></i></a>
										</li>
									@endforeach
								</ul>
								<form method="GET" action="{{ route('locale') }}" style="display: inline-block;">
									@csrf
									<div class="select-box">
										<select class="select" name="lang" onchange="this.form.submit()">
											<option {{ \App::getLocale() == 'en' ? 'selected' : '' }} value="en">EN</option>
											<option {{ \App::getLocale() == 'tr' ? 'selected' : '' }} value="tr">TR</option>
											<option {{ \App::getLocale() == 'ar' ? 'selected' : '' }} value="ar">AR</option>
										</select>
									</div>
								</form>
								
								{{-- @if ($isLogged)
									<div class="login" style="margin-top: 0;">
										<form method="POST" action="/logout" id="logout">
											@csrf
											<button type="submit" style=""><span>Logout</span><i class="fa fa-sign-out" aria-hidden="true"></i></button>
										</form>
									</div>
								@else
									<div class="login">
										<a href="#" data-toggle="modal" data-target="#login"><span>Login</span><i class="fa fa-lock" aria-hidden="true"></i></a>
									</div>
								@endif --}}
							</div>
						</div>

						<nav class="navbar">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navigation clearfix">

									<li class="{{ request()->is('/') ? 'active' : '' }}">
										<a href="{{ route('index') }}">{{__('home.home')}}</a>
									</li>
									{{-- <li class="{{ request()->is('services') ? 'active' : '' }}">
										<a href="{{ route('services') }}">{{__('home.services')}}</a>
									</li> --}}

									<li class="{{ request()->is('vehicles') ? 'active' : '' }}">
										<a href="{{ route('vehicles.index') }}">{{__('home.vehicles')}} </a>
									</li>
									<li class="{{ request()->is('about_us') ? 'active' : '' }}">
										<a href="{{ route('about_us') }}">{{__('home.about')}}</a>
									</li>

									<li class="{{ request()->is('/contact') ? 'active' : '' }}">
										<a href="{{ route('contact_us') }}">{{__('home.contact')}}</a>
									</li>

								</ul>
								{{-- <div class="header-search">
									<i class="fa fa-search" aria-hidden="true"></i>
									<input type="text" class="search-bar" placeholder="Search here..." />
								</div> --}}
							</div><!-- /.navbar-collapse -->

						</nav>

					</div>
				</div>
			</div>
		</div>
	</div>
</header>