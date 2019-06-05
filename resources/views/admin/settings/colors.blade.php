@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Site Colors!<small>update your site primamry & secondary color</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-9">
            @if (\Session::has('errors'))
            <div class="alert alert-danger">
                <strong>Error!: </strong> {!! \Session::get('errors') !!}
            </div>
            @endif

            @if (\Session::has('success'))
            <div class="alert alert-success">
                <strong>success!: </strong> {!! \Session::get('success') !!}
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Site Colors</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="setting" value="colors">
                        <div class="form-group">
                            <label for="value">Primary Color</label>
                            <input type="color" class="form-control" name="value[primary_color]" value="{{ $site_settings['primary_color'] }}" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="value">Secondary Color</label>
                            <input type="color" class="form-control" name="value[secondary_color]" value="{{ $site_settings['secondary_color'] }}" required>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
