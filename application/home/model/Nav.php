<?php
namespace app\admin\model;

use think\Db;
use think\Model;

class Nav extends Model{
    public static function tableName(){
        return "{{%nav}}";
    }
}