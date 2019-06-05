@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        Slider<small>update your homepage slider</small>
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
                <div class="panel-heading">Slider Images</div>
                <div class="panel-body">

                    <form method="POST" action="{{ route('crud.settings.set') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="setting" value="slider_imgs">
                        <input type="hidden" name="has_file" value="1">
                        <div class="form-group" id="slider_imgs">
                            <label for="value">Images</label>
                            <input accept="image/*" type="file" class="form-control file" name="value[]" aria-describedby="logoHelp" required>
                            <input accept="image/*" type="file" class="form-control file" name="value[]" aria-describedby="logoHelp">
                        </div>
                        <button type="button" class="btn" id="add-image">Add</button>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

<script >
    var t = null;
    function jquery_ready() {
        if (window.jQuery) {
            $(window).ready(function(){
              $("#add-image").click(function(){
                $("#slider_imgs").append('<input accept="image/*" type="file" class="form-control file" name="value[]" aria-describedby="logoHelp">');
              });
            });
        } else {
            t = window.setTimeout(jquery_ready, 100);
        }
    }
    t = window.setTimeout(jquery_ready, 100);
</script>