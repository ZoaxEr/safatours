<section class="rental-vehicles">
	<div class="container">
		<div class="row">
			<h2>{{explode(" ",__('home.rental_vehicles'))[0]}} <span>{{explode(" ",__('home.rental_vehicles'))[1]}}</span></h2>
			<p>
				{{-- {!! __('home.rental_vehicles_sub_title') !!} --}}
			</p>
			<div class="rental-per-day">
				<div class="row">
					@foreach ($vehicles as $vehicle)
					<div class="col-xs-12 col-sm-6">
						<div class="rental-car zoom">
							<figure>
							<img src="{{ url('/') . '/' . $vehicle->Thumbnail }}" alt="" />
							</figure>
							<div class="car-details ">
								<div class="car-info clearfix">
									<h5>{{ $vehicle->mark }} {{ $vehicle->model }}</h5>
								</div>
								<span>{{__('vehicles.start_from')}} <small> ${{ $vehicle->price }}</small> <strong>/ {{__('vehicles.per_day')}}</strong></span>

							</div>
							<ul class="car-more-info clearfix">
								<li>
									<i class="fa fa-car" aria-hidden="true"></i>{{ $vehicle->model }}
								</li>
								<li>
									<i class="fa fa-tachometer" aria-hidden="true"></i>{{ $vehicle->gearbox }}
								</li>
								<li>
									<i class="fa fa-cog" aria-hidden="true"></i>{{ $vehicle->engine }}
								</li>
								{{-- <li>
									<i class="fa fa-road" aria-hidden="true"></i>{{ $vehicle->KilometresTravelled }}
								</li> --}}
								<li class="orange-btn" style="width: 270px">
									<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>{{__('vehicles.rent_now')}}</a>
								</li>
							</ul>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>