<?php
namespace app\home\controller;

use think\Controller;
use think\Db;


class Home extends Controller{
    public function index(){
        $selectContent = Db::query('select * from  article');
        if($selectContent){
            return json($selectContent);
        }else{
            return '查询错误';
        }
    }
}