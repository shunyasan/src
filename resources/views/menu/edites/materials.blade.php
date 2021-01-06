@extends('menu.edites.layoutEdit')
@section('materials')

<!--材料-->
<li class="add-mate">
  <a>
    <label for="">材料名：
      <input type="text" class="material" name="material_1" value="@yield('mate')">
    </label>
  </a>
  <a class="amount-margin">
    <label for="">分量：
      <input type="number" class="amount" name="amount_1" value="@yield('amo')"></label>
    <!-- 単位 -->
    <label for="">単位：
      <select class="unit" name="unit_1" value="@yield('uni')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>

@if(isset($menu->material_2))
<!--材料-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_2" value="@yield('mate_2')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_2" value="@yield('amo_2')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_2" value="@yield('uni_2')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_3))
<!--材料_3-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_3" value="@yield('mate_3')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_3" value="@yield('amo_3')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_3" value="@yield('uni_3')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_4))
<!--材料_4-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_4" value="@yield('mate_4')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_4" value="@yield('amo_4')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_4" value="@yield('uni_4')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_5))
<!--材料_5-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_5" value="@yield('mate_5')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_5" value="@yield('amo_5')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_5" value="@yield('uni_5')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_6))
<!--材料_6-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_6" value="@yield('mate_6')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_6" value="@yield('amo_6')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_6" value="@yield('uni_6')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_7))
<!--材料_7-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_7" value="@yield('mate_7')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_7" value="@yield('amo_7')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_7" value="@yield('uni_7')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_8))
<!--材料_8-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_8" value="@yield('mate_8')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_8" value="@yield('amo_8')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_8" value="@yield('uni_8')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_9))
<!--材料_9-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_9" value="@yield('mate_9')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_9" value="@yield('amo_9')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_9" value="@yield('uni_9')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_10))
<!--材料_10-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_10" value="@yield('mate_10')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_10" value="@yield('amo_10')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_10" value="@yield('uni_10')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_11))
<!--材料_11-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_11" value="@yield('mate_11')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_11" value="@yield('amo_11')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_11" value="@yield('uni_11')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_12))
<!--材料_12-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_12" value="@yield('mate_12')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_12" value="@yield('amo_12')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_12" value="@yield('uni_12')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_13))
<!--材料_13-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="@yield('mate_13')" value="@yield('mate_13')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_13" value="@yield('amo_13')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_13" value="@yield('uni_13')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_14))
<!--材料_14-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_14" value="@yield('mate_14')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_14" value="@yield('amo_14')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_14" value="@yield('uni_14')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@if(isset($menu->material_15))
<!--材料_15-->
<li class="add-mate">
  <a><label for="">材料名：
      <input type="text" class="material" name="material_15" value="@yield('mate_15')">
  </label></a>
  <a class="amount-margin"><label for="">分量：
      <input type="number" class="amount" name="amount_15" value="@yield('amo_15')"></label>
    <!-- 単位 -->
    <label for="">単位：<select class="unit" name="unit_15" value="@yield('uni_15')">
        <option value="ml">ml</option>
        <option value="g">g</option>
        <option value="個">個</option>
        <option value="本">本</option>
        <option value="適量">適量</option>
      </select>
  </a>
</li>
@endif

@endsection
