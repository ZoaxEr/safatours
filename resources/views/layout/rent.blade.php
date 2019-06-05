<div class="primary-footer rent-car-info">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="about-us-footer">
					<img src="{{ url('/') . '/' . $Thumbnail }}">
				</div>
			</div>

			<div class="col-xs-12 col-sm-8 text-left contact-info-footer rent-now-head">
				<h1 class="view-title-style">{{$mark . ' ' . $model}}</h1>
				<p class="car-detail"><span class="bold">{{__('vehicles.seats')}}:</span> {{$AdultMax}}</p>
				<p class="car-detail"><span class="bold">{{__('vehicles.engine')}}:</span> {{$engine}}</p>
				<p class="car-detail"><span class="bold">{{__('vehicles.price')}}:</span> ${{$price}}</p>
			</div>
		</div>
	</div>
</div>

<section class="contact-us-wrapper">
	<div class="container">
		<h2>{{explode(" ",__('vehicles.rent_now'))[0]}} <span>{{explode(" ",__('vehicles.rent_now'))[1]}}</span></h2>
		<div class="contact-us">
			<form action="{{ route('rent', ['slug' => $slug]) }}" name="rentForm" method="post" novalidate id="rent" class="rent-form">
				@csrf
				<div class="row">

					<div class="col-sm-6 input-text-wrap">
						<label>{{__('vehicles.your_name')}}</label>
						<div class="input-text-wrap">
							<input type="text" placeholder="{{__('vehicles.your_name')}}" id="renter_name" name="renter_name" required/>
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
					</div>

					<div class="col-sm-6 input-text-wrap">
						<label>{{__('vehicles.your_email')}}</label>
						<div class="input-text-wrap">
							<input type="email" placeholder="{{__('vehicles.your_email')}}" id="renter_mail" name="renter_mail" required/>
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
					</div>

					<div class="col-sm-6 input-text-wrap">
						<label>{{__('vehicles.your_phone')}}</label>
						<div class="input-text-wrap">
							<input type="text" placeholder="{{__('vehicles.your_phone')}}" id="renter_phone" name="renter_phone" required/>
							<i class="fa fa-flag" aria-hidden="true"></i>
						</div>
					</div>

					<div class="col-sm-6 input-text-wrap" style="margin-bottom: 7px;">
						<label>{{__('vehicles.your_nationality')}}</label>
						<div class="input-text-wrap">
                            <input type="text" placeholder="{{__('vehicles.your_nationality')}}" id="renter_nation" name="renter_nation" required/>
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="">
							<input type="checkbox" name="has_whatsapp" value="1" id="has-whatsapp">
							<label class="check" for="has-whatsapp"><span class="check-box"></span>{{__('vehicles.has_whatsapp')}}</label>
						</div>
					</div>

					<div class='col-md-6 input-text-wrap'>
						<label>{{__('vehicles.picking_up_date')}}</label>
				        <div class="input-text-wrap">
				            <div class='input-group date' id='pick_up_date'>
				                <input type='text' placeholder="{{__('vehicles.picking_up_date')}}" class="form-control" name="pick_up_date" required/>
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>

				    <div class='col-md-6 input-text-wrap'>
						<label>{{__('vehicles.dropping_off_date')}}</label>
				        <div class="input-text-wrap">
				            <div class='input-group date' id='drop_off_date'>
				                <input type='text' placeholder="{{__('vehicles.dropping_off_date')}}" class="form-control" name="drop_off_date" disabled required/>
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>

					<div class="col-sm-6">
						<div class="">
				            <p style="color: #ccd6ff;">{{__('vehicles.picking_up_date_info')}}</p>
						</div>
					</div>

					<div class="col-sm-6" id="select-pick-first">
						<div class="">
				            <p style="color: #ccd6ff;">{{__('vehicles.dropping_off_date_info')}}</p>
						</div>
					</div>

					<div class="col-sm-6 input-text-wrap">
						<label>{{__('vehicles.picking_up_time')}}</label>
						<div class="input-text-wrap">
							<div class='input-group date' id='pick_up_time'>
								<input type="text" placeholder="{{__('vehicles.picking_up_time')}}" class="form-control" name="pick_up_time" required/>
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-time"></span>
				                </span>
			            	</div>
						</div>
					</div>

					<div class="col-sm-6 input-text-wrap">
						<label>{{__('vehicles.dropping_off_time')}}</label>
						<div class="input-text-wrap">
							<div class='input-group date' id='drop_off_time'>
								<input type="text" placeholder="{{__('vehicles.dropping_off_time')}}" class="form-control" name="drop_off_time" required/>
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-time"></span>
				                </span>
			            	</div>
						</div>
					</div>

					<div class="col-sm-6 input-text-wrap">
						<label>{{__('vehicles.picking_up_location')}}</label>
						<div class="input-text-wrap">
							<input type="text" placeholder="{{__('vehicles.picking_up_location')}}" id="pick_up_location" class="form-control" name="pick_up_location" required/>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
					</div>

					<div class="col-sm-6 input-text-wrap">
						<label>{{__('vehicles.dropping_off_location')}}</label>
						<div class="input-text-wrap">
							<input type="text" placeholder="{{__('vehicles.dropping_off_location')}}" id="drop_off_location" class="form-control" name="drop_off_location" required/>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="input-text-wrap">
							<input type="checkbox" name="has_driver" value="1" id="car-check">
							<label class="check" for="car-check"><span class="check-box"></span> {{__('vehicles.with_driver')}} </label>
						</div>
					</div>

					<div class="col-sm-12 input-text-wrap">
						<label>{{__('vehicles.additional_notes')}}</label>
						<div class="textarea-wrap">
							<textarea placeholder="{{__('vehicles.additional_notes')}}" id="renter_notes" name="renter_notes"></textarea>
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-sm-4 text-left">
						<button type="submit"  class="orange-btn">
							<i class="fa fa-plus-circle" aria-hidden="true"></i>{{__('vehicles.rent')}}
						</button>
					</div>
				</div>
			</form>
		</div>
		<div id="contactSuccess" style="display: none;">
				<span>Hey! Thanks for reaching out. I will get back to you soon</span>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
var getDates = function(startDate, endDate) {
  var dates = [],
      currentDate = startDate,
      addDays = function(days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
      };
  while (currentDate <= endDate) {
    dates.push(moment(currentDate).format('YYYY-MM-DD'));
    currentDate = addDays.call(currentDate, 1);
  }
  return dates;
};

var getHigherDate = function(pickedDate, disabledDates) {
	var higherDate = false;
  	$.each(disabledDates, function (index, disabledDate) {
        disabledDate = new Date(disabledDate);
        if (disabledDate.getTime() > pickedDate.getTime()) {
        	higherDate = disabledDate;
        	return disabledDate;
        }
    });
    return higherDate;
};

jQuery(document).ready(function() {
  	
  	var DisabledDates = [];
  	@foreach ($rents as $rent)
		DisabledDates = $.merge(DisabledDates, getDates(
		new Date(
			{{$rent->pick_up_date->year}},
			{{$rent->pick_up_date->month - 1}},
			{{$rent->pick_up_date->day}}
		),
		new Date(
			{{$rent->drop_off_date->year}},
			{{$rent->drop_off_date->month - 1}},
			{{$rent->drop_off_date->day}},
		))); 
  	@endforeach


    $('#pick_up_date').datetimepicker({
    	useCurrent: false,
        format: 'YYYY/MM/DD',
        minDate: moment(),
        disabledDates: DisabledDates,
    });
    $('#drop_off_date').datetimepicker({
        useCurrent: false, 
        format: 'YYYY/MM/DD',
        disabledDates: DisabledDates,
    });
    $("#pick_up_date").on("dp.change", function (e) {
    	var pickedDate = new Date(moment(e.date).format('YYYY-MM-DD'));
    	var mxDate = getHigherDate(pickedDate, DisabledDates);

        $('#drop_off_date').data("DateTimePicker").minDate(e.date);
        if (mxDate != false) {$('#drop_off_date').data("DateTimePicker").maxDate(mxDate);}
        $('#drop_off_date input').removeAttr('disabled');
        $('#select-pick-first').css("visibility","hidden");
        // $('#select-pick-first div p').html("Your Range can't contain disabled days");
    });
    $("#drop_off_date").on("dp.change", function (e) {
        $('#pick_up_date').data("DateTimePicker").maxDate(e.date);
    });

    $('#pick_up_time').datetimepicker({
        format: 'hh:mm',
    });
    $('#drop_off_time').datetimepicker({
        format: 'hh:mm',
    });

});
</script>