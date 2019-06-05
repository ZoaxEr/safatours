<section  class="map-wrapper">
	<div class="container map-float">
		<div class="row find-car">
			<div class="col-md-2 col-sm-12 padding-t-right-0">
				<div class="local-rental">
					<span>Local Rental</span>
					<strong>Find your car</strong>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 padding-t-right-0">
				<div class="input-text-wrap">
					<input type="text" placeholder="Airport or address" />
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-2 col-sm-6 padding-t-right-0">
				<div class="input-text-wrap">
					<input type="text" placeholder="04/03/2015"  class="pick-date"/>
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
				</div>

			</div>
			<div class="col-md-2 col-sm-6 padding-t-right-0">
				<div class="input-text-wrap">
					<input type="text" placeholder="21:40 am" class="time-pick" />
					<i class="fa fa-clock-o" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 padding-t-right-0">
				<div class="car-btn">
					<a href="#" class="orange-btn"> <i class="fa fa-binoculars" aria-hidden="true"></i>Find a car </a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="floating-wrap">
				<div class="floating-car">
					<div class="filter-cars">
						<div class="filter-inner">
							<img src="{{ asset('images/car15.jpg') }}" alt="" />
							<div class="filter-widgets">
								<strong><a><i class="fa fa-heart" aria-hidden="true"></i></a> <a><i class="fa fa-refresh" aria-hidden="true"></i></a> <a><i class="fa fa-search-plus" aria-hidden="true"></i></a> </strong>
							</div>
						</div>
						<div class="filter-car-details clearfix">

							<h5>Audi Q7 TDI Quattro</h5>
							<ul class="filter-car-rating clearfix">
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
							</ul>
							<span>Start from <small> $120</small> <strong>/ Per day</strong></span>

						</div>
						<ul class="filter-car-more-info clearfix">
							<li>
								<i class="fa fa-car" aria-hidden="true"></i>2011
							</li>
							<li>
								<i class="fa fa-tachometer" aria-hidden="true"></i>Diesel
							</li>
							<li>
								<i class="fa fa-cog" aria-hidden="true"></i>Auto
							</li>
							<li>
								<i class="fa fa-road" aria-hidden="true"></i>15000
							</li>
							<li class="orange-btn">
								<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>rent now</a>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</div>

	</div>
	<div id="map-view"></div>
</section>