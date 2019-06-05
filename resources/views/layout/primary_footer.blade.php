<div class="primary-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="about-us-footer">
					<h5 class="view-title-style">About Us</h5>
					<p>
						{!! __('about.about_us_content') !!}
					</p>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 text-center footer-img-gap">
				<a href="index.html" class="footer-logo"><img src="{{ $site_settings['site_logo'] }}" alt="lets drive" /></a>
			</div>
			<div class="col-xs-12 col-sm-4 text-right contact-info-footer">
				<h5 class="view-title-style">Contact Us</h5>
				<address>
					{{-- PO Box: 16122 Collins Victoria 8007 <span class="line-break"></span> --}}
					{{__('contact.address')}}: {{$site_settings['office_address']}}<span class="line-break"></span>
					{{-- Victoria <span class="line-break"></span> --}}
					{{-- 3000 Australia <span class="line-break"></span> --}}
					{{__('contact.email')}}:<a href="mailto:mail@letsdrive.com"> {{$site_settings['clients_email']}}</a><span class="line-break"></span>
					{{__('contact.phone')}}: <a href="tel:88001234567">{{$site_settings['phone_number']}}</a><span class="line-break"></span>
					{{-- Fax: <a href="fax:80009876543 ">+8 000 98 76 543 </a><span class="line-break"></span> --}}
				</address>
			</div>
		</div>
	</div>
</div>