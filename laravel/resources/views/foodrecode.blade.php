<!-- foodrecode -->
@extends('app')

@section('title','ミールでMeal_FoodRecodePae')
@section('description','ディスクリプション')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-3">
          <div class="card-body text-center">
          @include('error_list')
          <form method="POST" action="foodrecode">
                @csrf
            <div class="form-group">
                <label for="select1a">カテゴリ選択</label>
                <select id="select1a" name="meal_category" class="form-control">
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
                <input class="form-control" name="meal_name" type="text" id="text6b" placeholder="ここに入力">
            </div>
            <div class="form-group">
                <label for="text6b">賞味・消費期限</label>
                <input class="form-control" name="meal_limitday" value="<?php echo date('Y-m-d'); ?>"  type="date" />
            </div>
            <div class="form-group">
                <label for="select1a">数量
            </label>
                <select id="select1a" name="meal_num" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="text6b">価格</label>
                <input class="form-control" name="meal_price" type="text" id="text6b" placeholder="ここに入力">
            </div>
            <div>
                <i class="fas fa-camera float-left fa-3x"></i>
            </div>
            <button type="submit" class="btn btn-warning float-right">登録</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
