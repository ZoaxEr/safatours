<section class="need-help-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="need-help">
					<i class="fa fa-headphones"> </i>
					<h2>{{explode("?",__('home.need_help'))[0]}} <strong>{{count(explode("?",__('home.need_help'))) > 1 ? explode("?",__('home.need_help'))[1] : ''}}</strong></h2>
					<a href="callto:{{$site_settings['phone_number']}}">{{$site_settings['phone_number']}}</a>
				</div>
			</div>
		</div>

	</div>
</section>