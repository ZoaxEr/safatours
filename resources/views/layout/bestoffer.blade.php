<section class="get-bestoffer">
	<div class="container">
		<div class="row">
			<h2>{{explode(" ",__('home.best_offers'))[0]}} <span>{{explode(" ",__('home.best_offers'), 2)[1]}}</span></h2>
			<div class="get-left col-xs-12 col-sm-4">
				<ul>

				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 text-center car-center-pic">
				<img src="{{ asset('images/2016-Volvo-XC90-top-view1.jpg') }}" alt="">
			</div>
			<div class="get-left get-right text-right col-xs-12  col-sm-4">
				<ul>
					<li>
						<div class="clearfix">
							<span class="offer-icon"><i class="fa fa-car" aria-hidden="true"></i></span>
							<div class="offer-details">
								<h3>{{__('home.best_offers_item_1')}}</h3>
								<div class="divider-dotted">

								</div>
								<p>
									{{__('home.best_offers_item_1_content')}}
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="clearfix">
							<span class="offer-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
							<div class="offer-details">
								<h3>{{__('home.best_offers_item_2')}}</h3>
								<div class="divider-dotted">

								</div>
								<p>
									{{__('home.best_offers_item_2_content')}}
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="clearfix">
							<span class="offer-icon"><i class="fa fa-life-saver" aria-hidden="true"></i></span>
							<div class="offer-details">
								<h3>{{__('home.best_offers_item_3')}}</h3>
								<div class="divider-dotted">

								</div>
								<p>
									{{__('home.best_offers_item_3_content')}}
								</p>
							</div>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</div>
</section>