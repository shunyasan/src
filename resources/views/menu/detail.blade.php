@extends('layout')
@section('title','レシピ')
@section('content')
<div class="detail-all">
  <div class="detail-item">
    <h2>{{ $menu->dish_name }}</h2>
    <img src="{{ asset("/images/$menu->dish_img") }}" alt="{{ $menu->dish_name }}">
  </div>
  <div class="recipe">
    <p>材料</p>
    <ul>
      <li class="recipe-item"><a>{{ $menu->material_1 }}<span>{{ $menu->amount_1 }}{{ $menu->unit_1 }}</span></a></li>
        @if(isset($menu->material_2))
        <!--材料2-->
        <li class="recipe-item"><a>{{ $menu->material_2 }}<span>{{ $menu->amount_2 }}{{ $menu->unit_2 }}</span></a></li>
        @endif
        <!--材料3-->
        @if(isset($menu->material_3))
        <li class="recipe-item"><a>{{ $menu->material_3 }}<span>{{ $menu->amount_3 }}{{ $menu->unit_3 }}</span></a></li>
        @endif
        <!--材料4-->
        @if(isset($menu->material_4))
        <li class="recipe-item"><a>{{ $menu->material_4 }}<span>{{ $menu->amount_4 }}{{ $menu->unit_4 }}</span></a></li>
        @endif
        <!--材料5-->
        @if(isset($menu->material_5))
        <li class="recipe-item"><a>{{ $menu->material_5 }}<span>{{ $menu->amount_5 }}{{ $menu->unit_5 }}</span></a></li>
        @endif
        <!--材料6-->
        @if(isset($menu->material_6))
        <li class="recipe-item"><a>{{ $menu->material_6 }}<span>{{ $menu->amount_6 }}{{ $menu->unit_6 }}</span></a></li>
        @endif
        <!--材料7-->
        @if(isset($menu->material_7))
        <li class="recipe-item"><a>{{ $menu->material_7 }}<span>{{ $menu->amount_7 }}{{ $menu->unit_7 }}</span></a></li>
        @endif
        <!--材料8-->
        @if(isset($menu->material_8))
        <li class="recipe-item"><a>{{ $menu->material_8 }}<span>{{ $menu->amount_8 }}{{ $menu->unit_8 }}</span></a></li>
        @endif
        <!--材料9-->
        @if(isset($menu->material_9))
        <li class="recipe-item"><a>{{ $menu->material_9 }}<span>{{ $menu->amount_9 }}{{ $menu->unit_9 }}</span></a></li>
        @endif
        <!--材料10-->
        @if(isset($menu->material_10))
        <li class="recipe-item"><a>{{ $menu->material_10 }}<span>{{ $menu->amount_10 }}{{ $menu->unit_10 }}</span></a></li>
        @endif
        <!--材料11-->
        @if(isset($menu->material_11))
        <li class="recipe-item"><a>{{ $menu->material_11 }}<span>{{ $menu->amount_11 }}{{ $menu->unit_11 }}</span></a></li>
        @endif
        <!--材料12-->
        @if(isset($menu->material_12))
        <li class="recipe-item"><a>{{ $menu->material_12 }}<span>{{ $menu->amount_12 }}{{ $menu->unit_12 }}</span></a></li>
        @endif
        <!--材料13-->
        @if(isset($menu->material_13))
        <li class="recipe-item"><a>{{ $menu->material_13 }}<span>{{ $menu->amount_13 }}{{ $menu->unit_13 }}</span></a></li>
        @endif
        <!--材料14-->
        @if(isset($menu->material_14))
        <li class="recipe-item"><a>{{ $menu->material_14 }}<span>{{ $menu->amount_14 }}{{ $menu->unit_14 }}</span></a></li>
        @endif
        <!--材料15-->
        @if(isset($menu->material_15))
        <li class="recipe-item"><a>{{ $menu->material_15 }}<span>{{ $menu->amount_15 }}{{ $menu->unit_15 }}</span></a></li>
        @endif
    </ul>
  </div>
  <div class="detail-item">
    <div class="detail-btn">
      @guest
      @else
      @if($menu->users()->where('user_id', Auth::user()->id)->exists())
      <form method="POST" action="{{ route('unfavorite',$menu) }}">
        @csrf
        <button class="favorite" type="submit" name="unfavorite">やめる</button>
      </form>
      @else
      <form method="POST" action="{{ route('favorite',$menu) }}">
        @csrf
        <button class="favorite" type="submit" name="favorite">お気に入り</button>
      </form>
      @endif
      @endguest
      <button class="edit" type="button" name="button"
      onclick="location.href='/menu/edit/{{ $menu->id }}'">レシピ編集</button>
      <form method="POST" action="{{ route('delete',$menu->id) }}" id="form_id" onsubmit="checkDelete()">
        @csrf
        <button type="submit" class="delete">削除する</button>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
   function checkDelete(){
    if(confirm('削除してよろしいですか？')) {
      return true;
    }else{
      return false;
    }
  }
</script>

@endsection
