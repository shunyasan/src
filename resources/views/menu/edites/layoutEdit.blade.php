@extends('layout')
@section('title','レシピ編集')
@section('content')

<h1 class="top-wrap">レシピ編集</h1>
<div class="create-all">
  <form class="" action="{{route('update')}}" method="post" enctype="multipart/form-data" onsubmit="checkUpdate()">
    @csrf
    <input type="hidden" name="id" value="{{ $menu->id }}">
    <div class="create-recipe">
      <div class="name-add">
        <p class="create-title">料理名</p>
          @if ($errors->has('dish_name'))
          <p class="action-danger">
            {{ $errors->first('dish_name') }}
          </p>
          @endif
      </div>
      <label>料理名：<input type="text" class="dish-name" name="dish_name" value="{{ $menu->dish_name }}"></label>
    </div>
    <div class="create-recipe">
      <div class="name-add">
        <p class="create-title">料理画像</p>
        <p class="explanation">画像を選択してください</p>
          @if ($errors->has('dish_img'))
          <p class="action-danger">
            {{ $errors->first('dish_img') }}
          </p>
          @endif
      </div>
      <label>料理画像：<input type="file" name="dish_img" value="{{ asset("/images/$menu->dish_img") }}"></label>
    </div>
    <div class="create-recipe">
      <div class="name-add">
        <p class="create-title">材料</p>
        <p class="explanation">使う材料を15個まで登録できます</p>
          @if ($errors->has('material_1'))
          <p class="action-danger">
            {{ $errors->first('material_1') }}
          </p>
          @elseif ($errors->has('amount_1'))
          <p class="action-danger">
            {{ $errors->first('amount_1') }}
          </p>
          @elseif ($errors->has('unit_1'))
          <p class="action-danger">
            {{ $errors->first('unit_1') }}
          </p>
          @endif
      </div>
      <div class="foods-add">
        <ul id="add-wrap">
          @yield('materials')
        </ul>
        <button type="button" name="" id="list-add">増やす</button>
        <button type="button" name="" id="list-cut">減らす</button>
      </div>
    </div>
    <div class="recipe-add-wrap">
      <button class="recipe-edit" type="submit">編集する</button>
    </div>
  </form>
</div>
<script type="text/javascript">

/*/////////入力行を増やす/////////*/
    $("#list-add").click(function(){
      var str = $(".add-mate").length;
      var a = str + 1;
      var i = a;
      var text = `<li class="add-mate"><a><label for="">材料名： <input type="text" class="material" name="material_${i}"></label></a><a class="amount-margin"><label for=""> 分量： <input type="text" class="amount" name="amount_${i}"</label><label for=""> 単位：<select class="unit" name="unit_${i}"><option value="ml">ml</option><option value="g">g</option><option value="個">個</option><option value="本">本</option><option value="適量">適量</option></select></a></li>`;
      $("#add-wrap").append(text);
        if (str >= 2) {
          $("#list-cut").css('display','inline-block');
        }
        if (str >= 15) {
          $(this).css('display','none');
        }
    });

    /*/////////入力行を減らす/////////*/
    $("#list-cut").click(function(){
      $(".add-mate:last").remove();
      var str = $(".add-mate").length;
       if (str <= 1) {
        $(this).css('display','none');
      }
       if (str <= 15) {
        $("#list-add").css('display','inline-block');
      }
    });

    function checkUpdate(){
      if(confirm("更新してよろしいですか？")) {
        return true;
      }else{
        return false;
      }
  }
</script>

@endsection
