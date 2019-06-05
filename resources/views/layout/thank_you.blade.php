<section class="co-founder-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="co-founder text-center">
					<ul class="owl-theme review-profile">
						<li class="item">
							<figure>
								<img src="{{ asset('images/ok.png') }}" alt="" />
							</figure>
							<h1 class="view-title-style">Thank You!</h1>
							<h4>{{$first_message}}</h4>
							<h5 style="margin-top: 20px;font-weight: bolder;">
								{{$second_message}}
							</h5>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</section>

<script>
    setTimeout(function(){
        window.location.href = '{{ route('index') }}';
    }, 5000);
</script>