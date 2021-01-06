<!DOCTYPE html>

@extends('layout')
@section('title','今日のメニュー')
@section('content')

<h1 class="top-wrap">こちらでいかがですか</h1>
<div class="random-item">
  <div class="list-item">
    <a href="/menu/detail/{{ $menu->id }}" class="item-name">
      <img src="{{ asset("images/$menu->dish_img") }}" alt="{{ $menu->dish_name }}">
      <p>{{ $menu->dish_name }}</p>
    </a>
    @if($menu->users()->where('user_id', Auth::user())->exists())
    <!--action -->
    <form class="form_favo" method="POST" action="{{ route('unfavorite',$menu) }}">
      @csrf
      <button class="favorite_list" type="submit" name="unfavorite">やめる</button>
    </form>
    @else
    <form class="form_favo" method="POST" action="{{ route('favorite',$menu) }}">
      @csrf
      <button class="favorite_list" type="submit" name="favorite">お気に入り</button>
    </form>
    @endif
  </div>
  <div class="">
    <button class="choise" type="button" name="button"
    onclick="location.href='{{ route('random') }}'">もう一度選ぶ</button>
  </div>
</div>

@endsection
