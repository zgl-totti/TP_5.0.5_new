<?php
namespace app\common\model;

use think\Db;
use think\Model;

class Intro extends Model{
    public static function tableName(){
        return "{{%intro}}";
    }
}