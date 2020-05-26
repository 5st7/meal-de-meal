@extends('app')
@section('title', '一覧')

@section('content')
@include('layouts.nav')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        @include('home_button')
        <div class="list-group-flush">
          @foreach($mials as $meal)
          <div class="list-group-item">
          <i class="far fa-image fa-2x mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
          {{$meal->meal_name}}
          <span class="float-right">賞味期限:{{$meal->meal_limitday->format('Y/m/d H:i')}}</span>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
