@extends('app')
@section('title', '一覧')

@section('content')

@include('layouts.nav')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        @include('home_button')
        <div class="row mt-5">
          <div class="col-4 col-md-3">今月の目標</div>
          <div class="col-4 col-md-3">¥</div>
        </div>
        <div class="row">
          <div class="col-4 col-md-3">今月の食費</div>
          <div class="col-4 col-md-3">{{$morth_cost}}¥</div>
        </div>
        <div class="row">
          <div class="col-4 col-md-3">冷蔵庫貯金</div>
          <div class="col-4 col-md-3">¥</div>
        </div>

        <div class="list-group-flush mt-5">
          @foreach($mials as $meal)
          <div class="list-group-item">
          <i class="far fa-image fa-2x mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
          {{$meal->meal_name}}
          <span class="float-right">賞味期限:{{$meal->meal_limitday->format('Y/m/d')}}</span>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
