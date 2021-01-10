<!DOCTYPE html>

@extends('layout')
@section('title','メニュー一覧')
@section('content')
<div class="list-image">
  <div class="img-filter">
    <div class="list-page-name">
      <h1>メニュー一覧</h1>
      <p>登録されている料理の一覧を表示しています。</p>
      <p>献立はこの中から作成されています。</p>
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
        現在のメニューはありません
      </p>
    @else
    @foreach ($menus as $menu)
      <li class="list-item">
        <a href="/menu/detail/{{ $menu->id }}" class="item-name">
          <img src="{{ asset("images/$menu->dish_img") }}" alt="{{ $menu->dish_name }}">
          <p>{{ $menu->dish_name }}</p>
        </a>
        @guest
        @else

        @if($menu->users()->where('user_id',Auth::user()->id)->exists())
        <!--action -->
        <form class="form_favo" method="POST" action="{{ route('unfavorite',$menu) }}">
          @csrf
          <button class="favorite_list" type="submit">やめる</button>
        </form>
        @else
        <form class="form_favo" method="POST" action="{{ route('favorite',$menu) }}">
          @csrf
          <button class="favorite_list" type="submit">お気に入り</button>
        </form>
        @endif
        @endguest
      </li>
    @endforeach
    @endif
  </ul>
</div>
<!-- endforeach -->

@endsection
