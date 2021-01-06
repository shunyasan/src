<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //テーブル名
    protected $table = 'menus';

    //可変項目
    protected $fillable = ['dish_name','dish_img',
      'material_1','amount_1','unit_1',
      'material_2','amount_2','unit_2',
      'material_3','amount_3','unit_3',
      'material_4','amount_4','unit_4',
      'material_5','amount_5','unit_5',
      'material_6','amount_6','unit_6',
      'material_7','amount_7','unit_7',
      'material_8','amount_8','unit_8',
      'material_9','amount_9','unit_9',
      'material_10','amount_10','unit_10',
      'material_11','amount_11','unit_11',
      'material_12','amount_12','unit_12',
      'material_13','amount_13','unit_13',
      'material_14','amount_14','unit_14',
      'material_15','amount_15','unit_15'
    ];

    //ユーザデータの取り出し
    public function users(){
      return $this->belongsToMany('App\User')->withTimestamps();
    }

}
