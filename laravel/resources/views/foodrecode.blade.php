@extends('app')

@section('title','ミールでMeal')

@section('content')
@include('layouts.nav')
<div class="container">
@include('home_button')
  <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-5 shadow-none" style="background-color: #FFFDE7;">
          <div class="card-body text-center" style="background-color: #a1887f;">
          @include('error_list')
          <form method="POST" action="foodrecode"  enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="select1a" style="color: #fffde7;">カテゴリ選択</label>
                <select id="select1a" name="meal_category" class="form-control" style="padding:0px; background-color: #fffde7;">
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
                <label for="text6b" style="color: #fffde7;">食品名</label>
                <input class="form-control" name="meal_name" type="text" id="text6b" placeholder="ここに入力" style="background-color: #fffde7;">
            </div>
            <div class="form-group">
                <label for="text6b" style="color: #fffde7;">賞味・消費期限</label>
                <input class="form-control" name="meal_limitday" style="background-color: #fffde7;" value="<?php echo date('Y-m-d'); ?>"  type="date" />
            </div>
            <div class="form-group">
                <label for="text6b" style="color: #fffde7;">価格</label>
                <input class="form-control" name="meal_price" type="text" id="text6b" placeholder="ここに入力" style="background-color: #fffde7;">
            </div>
            <div>
            <label class="float-left form-group" style="top:50%">
              <span class="fas fa-camera fa-3x">
                <input type="file" name="meal_image" accept="image/*" style="display:none">
              </span>
            </label>
            <div>
              <button type="submit" class="btn btn-warning2 float-right" style="color: #6d4c41;">登録</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

