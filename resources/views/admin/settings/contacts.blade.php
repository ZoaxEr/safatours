@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Your Contact Methods!<small>Update your Social Media Links, Your number, Email, etc</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12">
            @if (\Session::has('errors'))
            <div class="alert alert-danger">
                <strong>Error!: </strong> {!! \Session::get('errors') !!}
            </div>
            @endif

            @if (\Session::has('phone_success'))
            <div class="alert alert-success">
                <strong>success!: </strong> {!! \Session::get('phone_success') !!}
            </div>
            @endif

            @if (\Session::has('errors'))
            <div class="alert alert-danger">
                <strong>Error!: </strong> {!! \Session::get('errors') !!}
            </div>
            @endif

            @if (\Session::has('clients_email_success'))
            <div class="alert alert-success">
                <strong>success!: </strong> {!! \Session::get('clients_email_success') !!}
            </div>
            @endif

            @if (\Session::has('social_errors'))
            <div class="alert alert-danger">
                <strong>Error!: </strong> {!! \Session::get('social_errors') !!}
            </div>
            @endif

            @if (\Session::has('social_success'))
            <div class="alert alert-success">
                <strong>success!: </strong> {!! \Session::get('social_success') !!}
            </div>
            @endif
        </div>

        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading">Phone Number</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" >
                        @csrf
                        <input type="hidden" name="setting" value="phone_number">
                        <div class="form-group">
                            <label for="value">Phone Number</label>
                            <input type="text" class="form-control" name="value" value="{{$site_settings['phone_number']}}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading">Clients Email</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" >
                        @csrf
                        <input type="hidden" name="setting" value="clients_email">
                        <div class="form-group">
                            <label for="value">Clients Email</label>
                            <input type="text" class="form-control" name="value" value="{{$site_settings['clients_email']}}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading">Office Address</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" >
                        @csrf
                        <input type="hidden" name="setting" value="office_address">
                        <input type="hidden" name="is_text" value="1">
                        <div class="form-group">
                            <label for="value">Office Address</label>
                            <input type="text" class="form-control" name="value" value="{{$site_settings['office_address']}}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Office Fax</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" >
                        @csrf
                        <input type="hidden" name="setting" value="office_fax">
                        <input type="hidden" name="is_text" value="1">
                        <div class="form-group">
                            <label for="value">Office Fax</label>
                            <input type="text" class="form-control" name="value" value="{{$site_settings['office_fax']}}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading">Social Media Links</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}">
                        @csrf
                        <input type="hidden" name="setting" value="site_contacts">

                        <div class="form-group">
                            <label for="value">Facebook</label>
                            <input type="text" class="form-control" name="value[facebook]" 
                                @isset($site_settings['site_contacts']['facebook'])
                                    value="{{$site_settings['site_contacts']['facebook']}}"
                                @endisset
                                required>
                        </div>

                        <div class="form-group">
                            <label for="value">Instagram</label>
                            <input type="text" class="form-control" name="value[instagram]"
                                @isset($site_settings['site_contacts']['instagram'])
                                    value="{{$site_settings['site_contacts']['instagram']}}"
                                @endisset
                                required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection