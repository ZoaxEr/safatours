<section class="banner">
    <div id="rev_slider_wrapper">
        <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper " data-alias="concept1" style="background-color:#000000;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
            <div id="rev_slider_202_1" class="rev_slider" style="display:none;" data-version="5.1.1RC">
                <ul>
                    <!-- SLIDE  -->
                    @foreach ($site_settings['slider_imgs'] as $image)
                        <li data-index="rs-672" >
                            <!-- MAIN IMAGE -->
                            <img src="{{ url('/') . '/' . $image }}" alt="" class="rev-slidebg" data-no-retina>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!--reserve car section start -->
    <div class="reserve-form">
        <div class="container">
            <div class="col-md-9 row reserve-form-wrap" style="margin-right: auto;margin-left: auto;float: unset;">
                <div class="form-head clearfix">
                    <div class="location">
                        <h2>{{__('home.reserve_your_car')}}</h2>
                    </div>
                </div>

                <form method="POST" action="{{ route('vehicles.search') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">

                            <label>{{__('home.picking_up_location')}}</label>
                            <div class="input-wrap clearfix">
                                <select class="select-state form-control" placeholder="State">
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}">{{ $state }}</option>
                                    @endforeach
                                </select>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <label>{{__('home.dropping_off_location')}}</label>
                            <div class="input-wrap clearfix">
                                <select class="select-state form-control" placeholder="State">
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}">{{ $state }}</option>
                                    @endforeach
                                </select>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <label>{{__('home.seats')}}</label>
                            <div class="input-wrap clearfix">
                                <input type="text" class="form-control" placeholder="Seats Count" pattern="[0-9]" onkeypress='validate(event)'>
                                <i class="fa fa-male" aria-hidden="true"></i>
                            </div>

                            <label>{{__('home.engine')}}</label>
                            <div class="input-wrap clearfix">
                                {{-- <input type="text" class="form-control" placeholder="Engine Type" pattern="[0-9]" onkeypress='validate(event)'> --}}
                                <select class="select-state form-control" placeholder="Engine Type">
                                    <option value=""><p>Select Engine Type</p></option>
                                    <option value="auto">Auto</option>
                                    <option value="manual">Manual</option>
                                </select>
                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>
                    <input type="checkbox" name="vehicle2" value="Car" id="car-check">
                    <label class="check" for="car-check"><span class="check-box"></span> {{__('home.return_to_the_same_location')}} </label>
                    <button class="find-car">
                        <i class="fa fa-binoculars" aria-hidden="true"></i>{{__('home.find_a_car')}}
                    </button>
                </form>
                
            </div>
        </div>
    </div>

    <!--reserve car section start -->
</section>