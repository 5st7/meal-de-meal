@extends('app')
@section('title', '一覧')

@section('content')

@include('layouts.nav')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        @include('home_button')
        <div class="d-flex justify-content-between mt-5">
          <div>今月の目標</div>
          <div>¥</div>
        </div>
        <div class="d-flex justify-content-between">
          <div>今月の食費</div>
          <div>¥ {{$morth_cost}}</div>
        </div>
        <div class="d-flex justify-content-between">
          <div>冷蔵庫貯金</div>
          <div>¥</div>
        </div>

        <div class="list-group-flush mt-5" id="list">
          @foreach($mials as $meal)
          <div class="list-group-item d-flex justify-content-between">
            @if($meal->meal_image != null)
              <img id="meal" src="/storage/{{$meal->meal_image}}" class="rounded-circle">
            @else
              <div class="far fa-image fa-2x mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></div>
            @endif
            <span class="align-self-center">
              {{$meal->meal_name}}
            </span>
            <span class="align-self-center">
              賞味期限:{{$meal->meal_limitday->format('Y/m/d')}}
            </span>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
