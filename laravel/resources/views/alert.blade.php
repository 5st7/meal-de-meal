@extends('app')
@section('title', '一覧')

@section('content')

@include('layouts.nav')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        @include('home_button')
        @foreach($mials as $meal) {{--この行を追加--}} 
        <div class="card mt-3" style="padding: 0px;background-color: #FFFDE7; justify-content-between">
          <div class="card-body" style="margin: 0px;padding: 10px;background-color: #6D4C41;">
            <div d-flex justify-content-center>
              <div class="fo nt-weight-bold" style="font-size: 18px;
                color: #FFFDE7;">
              {{$meal->meal_name}}
              </div> 
            </div>
          </div>
          <div class="card-body pt-0 pb-2" style="border:none;">
          <div class="d-flex justify-content-between">
            <div>
              <img id="meal" src="/storage/{{$meal->meal_image}}" class="rounded-circle">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <div>
              登録日:{{$meal->meal_limitday->format('Y/m/d')}}
              </div>
              <div>
              消費期限:{{$meal->meal_limitday->format('Y/m/d')}}
              </div>
              <div>
              値段:1000円
              </div>
            </div>
          </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
