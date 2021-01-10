<!DOCTYPE html>

@extends('layout')
@section('title','お気に入りメニュー')
@section('content')
<div class="favo-image">
  <div class="img-filter">
    <div class="list-page-name">
      <h1>お気に入り一覧</h1>
      <p>お気に入りした料理を表示しています。</p>
    </div>
  </div>
</div>


<!-- foreach -->
<div class="list-all">
  @if(session('err_msg'))
  <p class="action-complete">
    {{ session('err_msg') }}
  </p>
  @endif
  <ul class="list-items">
  @if(count($menus) == 0)
    <p class="non">
      現在のお気に入りはありません
    </p>
  @else
    @foreach ($menus as $menu)
    <li class="list-item">
      <a href="/menu/detail/{{ $menu->id }}" class="item-name">
        <img src="{{ asset("images/$menu->dish_img") }}" alt="{{ $menu->dish_name }}">
        <p>{{ $menu->dish_name }}</p>
      </a>
    </li>
    @endforeach
  @endif
  </ul>
</div>
<!-- endforeach -->

@endsection
