<section class="contact-us-wrapper" id="contact-us">
	<div class="container">
		<h2>{{explode(" ",__('contact.contact_us'))[0]}} <span>{{explode(" ",__('contact.contact_us'))[1]}}</span></h2>
		<div class="contact-us">
			<form name="contactForm" method="post" class="contact-form" action="{{ route('contact_us_send') }}">
				@csrf
				<div class="row">

					<div class="col-sm-4">
						<div class="input-text-wrap margin-bottom">
							<input type="text" placeholder="{{__('contact.name')}}" id="name" class="contact-name" name="name" required/>
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="input-text-wrap margin-bottom">
							<input type="email" placeholder="{{__('contact.email')}}"  id="email" class="contact-mail" name="email"  required/>
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="input-text-wrap margin-bottom">
							<input type="text" placeholder="{{__('contact.subject')}}" id="sub" class="contact-subject" name="subject" required/>
							<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
						</div>

					</div>
					<div class="col-sm-8">
						<div class="textarea-wrap margin-bottom">
							<textarea placeholder="{{__('contact.your_message')}}" id="message" name="message"></textarea>
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>

					</div>

				</div>
				<div class="row">
					<div class="col-sm-4">
						
					</div>
					<div class="col-sm-8">
						<button type="submit"  class="orange-btn"  data-ng-click="submitcontactForm(contactForm.$invalid)" data-ng-disabled="submitButtonDisabled">
							<i class="fa fa-plus-circle" aria-hidden="true"></i>{{__('contact.send_message')}}
						</button>
					</div>
				</div>
			</form>
			@if (\Session::has('success'))
			<div id="contactSuccess">
				<span>{!! \Session::get('success') !!}</span>
			</div>
			@endif
		</div>
	</div>
</section>