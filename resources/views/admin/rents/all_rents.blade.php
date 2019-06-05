@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{$title}}<small>{{$sub_title}}</small>
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
          <table class="rents-table">
            <tr>
              <th>Car Code</th>
              <th>Renter Name</th>
              <th>Pick-Up Date</th>
              <th>Drop-Off Date</th>
              <th>Need Driver</th>
              <th>Full Amount</th>
              <th>Actions</th>
            </tr>
            @if (count($rents) > 0)
              @foreach ($rents as $rent)
              <tr>
                <td>{{$rent->traceNumber}}</td>
                <td>{{$rent->renter_name}}</td>
                <td>{{$rent->pick_up_date}}</td>
                <td>{{$rent->drop_off_date}}</td>
                <td>{{$rent->has_driver ? 'Yes' : 'No'}}</td>
                <td>{{$rent->car_amount}}</td>
                <td><a class="btn btn-secondary" href="{{ backpack_url('rents') . '/' . $rent->id . '/edit' }}" role="button">Review</a></td>
              </tr>
              @endforeach
            @else
              <tr>
                <td colspan="7"><p class="text-center" style="font-size: 28px;">No Resaults Found!</p></td>
              </tr>
            @endif
          </table>
        </div>
    </div>
@endsection
