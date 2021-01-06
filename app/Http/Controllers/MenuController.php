<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Menu;
use App\User;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    /**
    *topページの表示
    *@return view
    */
    public function showTop(){
        return view('menu.top');
    }

    /**
    *listページの表示
    */
    public function showList(){
      $menus = Menu::all();
      return view('menu.list', compact('menus'));
    }

    /**
    *detailページの表示
    */
    public function showDetail($id){
      $menu = Menu::find($id);
        if (is_null($menu)) {
          \Session::flash('err_msg','データがありません');
          return redirect(route('list'));
        }

        return view('menu.detail', compact('menu'));
    }

    /**
    *createページの表示
    */
    public function showCreate(){
      return view('menu.create');
    }

    /**
    *editページの表示
    */
    public function showEdit($id){
      $menu = Menu::find($id);
        return view('menu.edit',compact('menu'));
    }

    /**
    *favoriteページの表示
    */
    public function showFavorite(){
      if(Auth::check()){
        $user = Auth::user();
        $menus = $user->menus;
        return view('menu.favolist',compact('menus'));
      }else {
        \Session::flash('coution','お気に入りはユーザ登録の必要があります');
        return view('auth.login');
      }
    }

    /**
    *お気に入りを保存する
    */
    public function exeFavorite(Menu $menu){
      if(Auth::check()){
        $user = Auth::user();
        $user->menus()->syncWithoutDetaching([$menu->id]);
        return redirect(route('list'));
      }else {
        \Session::flash('coution','お気に入りはユーザ登録の必要があります');
        return view('auth.login');
      }
    }

    /**
    *お気に入りを削除する
    */
    public function exeUnFavorite(Menu $menu){
      $user = Auth::user();
      $menu_id = array($menu->id);
      $menus = $user->menus()->detach($menu_id);
      return redirect(route('list'));
    }

    /**
    *Menuテーブルに追加
    */
    public function exeCreate(MenuRequest $request){
      //画像データの加工
      $file = $request->dish_img;
        if ($file) {
          $fileName = time() .$file->getClientOriginalName();
          $target_path = public_path('images');
          $file->move($target_path,$fileName);
          $file = $fileName;
        }
        else {
          \Session::flash('err_msg','画像がありません');
          return redirect(route('menu.create'));
        }

      $inputs = $request->all();
       \DB::beginTransaction();
        try {
          $model = new Menu;
          $inputs = collect($inputs);
          $inputs = $inputs->merge(['dish_img' => $file]);
          $model = $model->fill($inputs->all());
          $model->save();
          \DB::commit();
        }
        catch (\Throwable $e) {
          \DB::rollback();
          abort(500);
        }

        \Session::flash('err_msg','メニューを追加しました');
        return redirect(route('top'));

    }


    /**
    *レシピのを更新する
    */
    public function exeUpdate(MenuRequest $request){
      //画像データの加工
      $file = $request->dish_img;
      if ($file) {
        $fileName = time() .$file->getClientOriginalName();
        $target_path = public_path('images');
        $file->move($target_path,$fileName);
        $file = $fileName;
      }

      $inputs = $request->all();
      \DB::beginTransaction();
      try {
        $menu = Menu::find($inputs['id']);
        $inputs = collect($inputs);
        if (!isset($file->dish_img)) {
          $inputs = $inputs->forget('dish_img');
        }
        else{
          $inputs = $inputs->merge(['dish_img' => $file]);
        }
        $menu = $menu->fill($inputs->all());
        $menu->save();
        \DB::commit();
      } catch (\Throwable $e) {
        \DB::rollback();
        abort(500);
      }

      \Session::flash('err_msg','メニューを追加しました');
      return redirect(route('list'));

    }

    /**
    *メニューを削除する
    */
    public function exeDelete($id){
      if (empty($id)) {
        \Session::flash('err_msg','メニューがありません');
        return redirect(route('detail'));
      }
      try {
        Menu::destroy($id);
      } catch (\Exception $e) {
        \DB::rollback();
        abort(500);
      }
      \Session::flash('err_msg','削除しました');
      return redirect('menu/list');
    }

    /**
    *本日のメニューを表示する
    */
    public function showRandom(){
      $menu = Menu::inRandomOrder()->first();
      return view('menu.random',compact('menu'));
    }

}
