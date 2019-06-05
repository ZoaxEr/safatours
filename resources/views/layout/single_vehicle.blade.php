<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<section class="car-view-slider">
	<div class="container">

		<div class="vehicles-head clearfix">
			<h5>{{ $mark . ' ' . $model }}</h5>
			<a href="{{ route('vehicles.index') }}" class="get-back-home">Get Back<i class="fa fa-home" aria-hidden="true"></i></a>
		</div>

		<div class="rental-car">
			<div class="car-parts-slider-outer">
				<div class="car-parts-slider">
					@foreach ($photos as $photo)
					<div class="item">
						<img src="{{ url('/') . '/' . $photo }}" style="width: 1170px; height: 605px;" alt="vehicles">
					</div>
					@endforeach
				</div>

			</div>

			<div class="car-details-wrap">
				<div class="car-details ">
					<div class="car-info clearfix">
						<span class="start-price-rent">Start from <small> ${{$price}}</small> <strong>/ Per day</strong></span>
						{{-- <ul class="car-rating">
							<li>
								<i class="fa fa-star" aria-hidden="true"></i>
							</li>
							<li>
								<i class="fa fa-star" aria-hidden="true"></i>
							</li>
							<li>
								<i class="fa fa-star" aria-hidden="true"></i>
							</li>
							<li class="grey-star">
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
							</li>
							<li class="grey-star">
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</li>
						</ul> --}}
					</div>

				</div>
				<ul class="car-more-info clearfix">
					<li>
						<i class="fa fa-car" aria-hidden="true"></i>{{$model}}
					</li>
					<li>
						<i class="fa fa-tachometer" aria-hidden="true"></i>{{$gearbox}}
					</li>
					<li>
						<i class="fa fa-cog" aria-hidden="true"></i>{{$engine}}
					</li>
					<li>
						<i class="fa fa-road" aria-hidden="true"></i>{{$KilometresTravelled}}
					</li>
					<li class="orange-btn">
						<a href="{{ route('rent_view', ['slug' => $slug]) }}"><i class="fa fa-plus-circle" aria-hidden="true"></i>rent now</a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</section>

<section class="vehicles-description">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 ">
				<div class="feature-description-wrap clearfix">
					<div class="tab-list-feature">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">{{__('vehicles.description')}}</a>
							</li>
							<li role="presentation">
								<a href="#features" aria-controls="features" role="tab" data-toggle="tab">{{__('vehicles.features')}}</a>
							</li>
							{{-- <li role="presentation">
								<a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a>
							</li> --}}
							<li role="presentation">
								<a href="#video" aria-controls="video" role="tab" data-toggle="tab">{{__('vehicles.video')}}</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="overview">
						<div class="para-related-description">
							{!! $Description !!}
						</div>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="features">
						<div class="para-related-description">
							
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-4 common-list-vehicles">
								<h5 class="view-title-style">Features</h5>
								<ul class="list-feature-bullet">
									@foreach ($Features as $Feature)
										<li>
											<span>{{$Feature['name']}}</span>
										</li>
									@endforeach
								</ul>
							</div>

						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="location">
						<div class="para-related-description">
							<p>
								Lorem ipsum dolor sit amet, onsectetuer adipiscing elitcommodo ligula eget dolor. Aenean massa. Cum sociis natoque tibus et magnis dis parturient montes. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id.
							</p>

							<p>
								Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit.
							</p>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-4 common-list-vehicles">
								<h5 class="view-title-style">Features</h5>
								<p>
									The Park Assist system works by using additional sensors mounted in the bumpers, together with parking sensors to actively support the driver.
								</p>
								<ul class="list-feature-bullet">
									<li>
										<span>Fusce vulputate eleifend sapien. </span>
									<li>
										<span>Stibulum purus quam scelerisque</span>
									</li>
									<li>
										<span>Nonummy id, metus nullam</span>
									</li>
									<li>
										<span>Sodales nec, volutpat a, suscipit </span>
									</li>
									<li>
										<span>Quis, nisi. Curabitur ligula sapien</span>
									</li>
									<li>
										<span>Donec interdum, metus et hendr</span>
									</li>
									<li>
										<span>Aliquet, dolor diam sagittis ligula</span>
									</li>

								</ul>
							</div>
							<div class="col-xs-12 col-sm-4 common-list-vehicles">
								<h5 class="view-title-style">Interior</h5>
								<p>
									White instrument lighting adds a glow of sophistication to the host of little luxuries that distinguish the interior while not compromising on functionality.
								</p>
								<ul class="list-feature-bullet">
									<li>
										<span>In dui cras ultricies mi eu turpis </span>
									<li>
										<span>Vestibulum ante ipsum primis</span>
									</li>
									<li>
										<span>Ultrices posuere cubilia varius</span>
									</li>
									<li>
										<span>Nullam nulla eros, ultricies amet </span>
									</li>
									<li>
										<span>Etiam imperdiet imperdiet orci</span>
									</li>
									<li>
										<span>Nec neque. Phasellus leo dolor</span>
									</li>
									<li>
										<span>Tempus non, auctor et endrerit</span>
									</li>

								</ul>
							</div>
							<div class="col-xs-12 col-sm-4 common-list-vehicles">
								<h5 class="view-title-style">Exterior</h5>
								<p>
									The Bi-Xenon headlights mimic natural daylight and are more powerful. Daytime LED running lights make sure you’re always visible in any weather.
								</p>
								<ul class="list-feature-bullet">
									<li>
										<span>Fusce vulputate eleifend sapien. </span>
									<li>
										<span>Stibulum purus quam scelerisque</span>
									</li>
									<li>
										<span>Nonummy id, metus nullam</span>
									</li>
									<li>
										<span>In dui cras ultricies mi eu turpis </span>
									</li>
									<li>
										<span>Vestibulum ante ipsum primis</span>
									</li>
									<li>
										<span>Ultrices posuere cubilia varius</span>
									</li>

								</ul>
							</div>

						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="video">
						<div class="para-related-description">
							<video id='vehicle-video' class='video-js' controls preload='auto' width='640' height='264' poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
							    <source src='{{url('/') . '/' . $video}}' type='video/mp4'>
							    <p class='vjs-no-js'>
							      To view this video please enable JavaScript, and consider upgrading to a web browser that
							      <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
							    </p>
							  </video>

							  <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>
						</div>
					</div>
				</div>

				{{-- <div class="some-short-note">
					<span class="note"> <i class="fa fa-exclamation-circle" aria-hidden="true"></i><span>Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi.</span></span>
				</div> --}}

			</div>
		</div>

	</div>
</section>