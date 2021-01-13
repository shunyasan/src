<!DOCTYPE html>

@extends('layout')
@section('title','献立作成')
@section('content')

<div class="created">

<h1 class="random-item">こちらでいかがですか？</h1>
<h2 class="random-item">－献立－</h2>
<div class="random-wrap">
  <table class="random-block">
    <tr class="random-block-day">
      <th class="badboy"></th>
    @for($i = 1;$i <= $day; $i++)
      <th>{{$i}}日目</th>
    @endfor
    </tr>
    <tr class="random-block-count">
      <td>
        @if($time[0] == 1)
          {{'朝食'}}
          @elseif($time[0] == 2)
          {{'昼食'}}
          @elseif($time[0] == 4)
          {{'夕食'}}
        @endif
      </td>
      @foreach($menu1 as $menu)
        <td>
          <div class="outputs-item">
            <a href="/menu/detail/{{ $menu->id }}" class="output-name">
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
        </td>
      @endforeach
    </tr>
    @if(isset($menu2))
      <tr class="random-block-count-2">
        <td>
          @if($time[1] == 1)
            {{'朝食'}}
            @elseif($time[1] == 2)
            {{'昼食'}}
            @elseif($time[1] == 4)
            {{'夕食'}}
          @endif
        </td>
        @foreach($menu2 as $menu)
        <td>
          <div class="outputs-item">
            <a href="/menu/detail/{{ $menu->id }}" class="output-name">
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
        </td>
        @endforeach
      </tr>
    @endif
    @if(isset($menu3))
      <tr class="random-block-count">
        <td>
          @if($time[2] == 1)
            {{'朝食'}}
            @elseif($time[2] == 2)
            {{'昼食'}}
            @elseif($time[2] == 4)
            {{'夕食'}}
          @endif
        </td>
        @foreach($menu3 as $menu)
        <td>
          <div class="outputs-item">
            <a href="/menu/detail/{{ $menu->id }}" class="output-name">
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
        </td>
        @endforeach
      </tr>
    @endif
  </table>
  <div class="">
    <button class="choise" type="button" name="button"
    onclick="location.href='{{ route('top') }}'">もう一度選ぶ</button>
  </div>
</div>
</div>

<script type="text/javascript">

    $(window).on('load',function(){
      $(".created").addClass("opening");
    });

    $(".random-item").delay(1500).queue(function(){
      $(this).addClass("show").css({'opacity':'1'});
    });


</script>

@endsection
