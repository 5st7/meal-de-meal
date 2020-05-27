@extends('app')
@section('title', '一覧')

@section('content')
  <div class="container float-center w-50">
    {{$morth_cost}}
    <div class="list-group-flush">
      @foreach($mials as $meal)
      <div class="list-group-item">
        <i class="far fa-image fa-2x mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
        {{$meal->meal_name}}
        <span class="float-right">賞味期限:{{$meal->meal_limitday->format('Y/m/d')}}</span>
      </div>
      @endforeach
    </div>
  </div>
@endsection