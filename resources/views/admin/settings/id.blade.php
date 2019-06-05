@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Identification<small>Update your website's Logo, favicon, title, name, etc.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-6">
            @if (\Session::has('logo_errors'))
            <div class="alert alert-danger">
                <strong>Error!: </strong> {!! \Session::get('logo_errors') !!}
            </div>
            @endif

            @if (\Session::has('logo_success'))
            <div class="alert alert-success">
                <strong>success!: </strong> {!! \Session::get('logo_success') !!}
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Site Logo</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="setting" value="site_logo">
                        <input type="hidden" name="has_file" value="1">
                        <div class="form-group">
                            <label for="value">Logo</label>
                            <input accept="image/*" type="file" class="form-control" name="value" aria-describedby="logoHelp" required>
                            <small id="logoHelp" class="form-text text-muted">upload your logo</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            @if (\Session::has('fav_errors'))
            <div class="alert alert-danger">
                <strong>Error!: </strong> {!! \Session::get('fav_errors') !!}
            </div>
            @endif

            @if (\Session::has('fav_success'))
            <div class="alert alert-success">
                <strong>success!: </strong> {!! \Session::get('fav_success') !!}
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Site Favicon</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="setting" value="site_favicon">
                        <input type="hidden" name="has_file" value="1">
                        <div class="form-group">
                            <label for="value">Icon</label>
                            <input accept="image/*" type="file" class="form-control" name="value" aria-describedby="favHelp" required>
                            <small id="favHelp" class="form-text text-muted">upload your icon</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            @if (\Session::has('errors'))
            <div class="alert alert-danger">
                <strong>Error!: </strong> {!! \Session::get('errors') !!}
            </div>
            @endif

            @if (\Session::has('title_success'))
            <div class="alert alert-success">
                <strong>success!: </strong> {!! \Session::get('title_success') !!}
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Site Title</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" >
                        @csrf
                        <input type="hidden" name="setting" value="site_title">
                        <input type="hidden" name="is_text" value="1">
                        <div class="form-group">
                            <label for="value">Title</label>
                            <input type="text" class="form-control" name="value" aria-describedby="titleHelp" value="{{$site_settings['site_title']}}" required>
                            <small id="titleHelp" class="form-text text-muted">set your title</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection