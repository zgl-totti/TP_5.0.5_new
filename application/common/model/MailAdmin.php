<?php
namespace app\common\model;

use think\Db;
use think\Model;

class MailAdmin extends Model{
    protected $table = 'new_mail_admin';

    public function mailContent(){
        return $this->hasOne('Mail','id','mailid');
    }

    public function user(){
        return $this->hasOne('User','id','sendid');
    }
}