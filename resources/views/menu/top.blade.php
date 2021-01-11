@extends('layout')
@section('title','献立を作成')
@section('content')

<div class="show">

@if (session('err_msg'))
  <p class="action-complete">
    {{ session('err_msg') }}
  </p>
@endif
<div class="top-image">
  <div class="img-filter">
    <h1>今日の食事は決まりましたか？</h1>
  </div>
</div>
<div class="top-wrap">
  <div class="top-middle">
    <h2>－ 提案 －</h2>
    <ul class="top-middle-list">
      <li>・献立に悩む時間、本当に必要ですか？</li>
      <li>・料理にストレスを感じていませんか？</li>
    </ul>
  </div>
  <form class="" action="{{ route('random') }}" method="post">
    @csrf
    <div class="top-button">
      <h3>食事回数と日数を選択してください</h3>
      <div class="meal-freq">
        <p>食事回数</p>
          <input type="checkbox" name="count_1" value="1">朝
          <input type="checkbox" name="count_2" value="2">昼
          <input type="checkbox" name="count_4" value="4" checked>夜
      </div>
      <div class="meal-freq">
        <p>日数</p>
        <label>
          <select id="meal-day" class="" name="meal_day">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          日分
        </label>
      </div>
    </div>
    <div class="top-button">
      <button class="decide" type="submit">
        献立を作成
      </button>
    </div>
  </form>
</div>
</div>

@endsection
