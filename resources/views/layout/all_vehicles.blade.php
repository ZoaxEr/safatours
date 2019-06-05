<section class="main-vehicles-wrap">
	<div class="container">
		<div class="row po-rel pattern">
			<div class="col-xs-12 col-sm-8 col-md-12">
				<div class="row">
					@foreach ($vehicles as $vehicle)
					@if (!$vehicle->hide)

						<div class="col-sm-6 col-md-4">
							<div class="filter-cars">
								<div class="filter-inner">
									<a href="{{ url('/vehicles/' . $vehicle->slug) }}"><img style="width: 100%" src="{{ url('/') . '/' . $vehicle->Thumbnail }}" alt="" /></a>
								</div>
								<div class="filter-car-details clearfix">

									<h5>{{ $vehicle->mark }} {{ $vehicle->model }}</h5>
									<span>{{__('vehicles.start_from')}} {{-- <em>$38</em> --}} <small> ${{ $vehicle->price }}</small> <strong>/ {{__('vehicles.per_day')}}</strong></span>
								{{-- <span class="discount">-20%</span> --}}
								</div>
								<ul class="filter-car-more-info clearfix">
									<li>
										<i class="fa fa-car" aria-hidden="true"></i>{{ $vehicle->model }}
									</li>
									<li>
										<i class="fa fa-cog" aria-hidden="true"></i>{{ $vehicle->engine }}
									</li>
									<li class="orange-btn">
										<a href="{{ route('rent_view', ['slug' => $vehicle->slug]) }}"><i class="fa fa-plus-circle" aria-hidden="true"></i>{{__('vehicles.rent_now')}}</a>
									</li>
								</ul>

							</div>
						</div>

					@endif
					@endforeach
				</div>

				{{-- <div class="row">
					<div class="col-xs-12 col-sm-12">
						<nav class="services-pagination">
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous"><i class="fa fa-long-arrow-left" aria-hidden="true"></i><span aria-hidden="true">prev</span></a>
								</li>
								<li>
									<a href="#">1</a>
								</li>
								<li class="active">
									<a href="#">2 <span class="sr-only">(current)</span></a>
								</li>
								<li>
									<a href="#">3</a>
								</li>
								<li>
									<a href="#">4</a>
								</li>
								<li>
									<a href="#" aria-label="Next"><span aria-hidden="true">next</span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</li>
							</ul>
						</nav>
					</div>
				</div> --}}

			</div>

			

		</div>

	</div>
</section>