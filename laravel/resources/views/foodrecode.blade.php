<!-- foodrecode -->
@extends('layouts.layout')

@section('title','ミールでMeal_FoodRecodePae')
@section('description','ディスクリプション')
@include('layouts.head')

@section('content')
<div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-3">
          <div class="card-body text-center">
          <form method="POST" action="{{route('foodrecode')}}">
                @csrf
            <div class="form-group">
                <label for="select1a">カテゴリ選択</label>
                <select id="select1a" class="form-control">
                        <option>野菜・果物</option>
                        <option>飲料</option>
                        <option>肉</option>
                        <option>魚</option>
                        <option>菓子</option>
                        <option>冷凍食品</option>
                        <option>調味料</option>
                </select>
            </div>
            <div class="form-group">
                <label for="text6b">食品名</label>
                <input class="form-control" type="text" id="text6b" placeholder="ここに入力">
            </div>
            <div class="form-group">
                <label for="text6b">賞味・消費期限</label>
                <input class="form-control" name="date" type="date" />
            </div>
            <div class="form-group">
                <label for="select1a">数量
            </label>
                <select id="select1a" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="text6b">価格</label>
                <input class="form-control" type="text" id="text6b" placeholder="ここに入力">
            </div>
            <div>
                <i class="fas fa-camera float-left fa-3x"></i>
            </div>
            <button type="button" class="btn btn-warning float-right">登録</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection