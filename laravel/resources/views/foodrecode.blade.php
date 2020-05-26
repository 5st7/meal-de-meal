<!-- foodrecode -->
@extends('layouts.layout')

@section('title','ミールでMeal_FoodRecodePae')
@section('description','ディスクリプション')
@include('layouts.head')

@section('content')
<h1>食品を登録しよう!!</h1>
<form method="POST" action="/food_entry">
{!! csrf_field() !!}
@csrf
    <dl>
        <dt>カテゴリ</dt>
        <dd>
            <select name="meal_category">
                <option value="">カテゴリを選んでください</option>
                <option value="vegetables">野菜</option>
                <option value="fruit">果物</option>
                <option value="fermentation">発酵食品</option>
                <option value="fish">魚類</option>
                <option value="meat">肉類</option>
            </select>
        </dd>
    </dl>
    <dl>
        <dt>食品名</dt>
        <dd><input type="text" name="meal_name"></dd>
    </dl>
    <dt>
        <label>賞味期限(年/月/日)：<input type="date"></label>
        <input type="hidden"  name="meal_limitday">
    <dl>
        <dt>個数/量</dt>
        <dd><input type="number" name="meal_num"></dd>
    </dl>
    <dl>
        <dt>価格</dt>
        <dd><input type="number" name="meal_price"></dd>
    </dl>
    <input type="submit" value="食品を登録する">
    <input type="hidden"  name="_token">

</form>
@endsection