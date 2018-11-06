<?php
    namespace app\index\controller;

    use think\Controller;
    use think\Db;


    class Index extends Controller{
        public function index(){
            $selectContent = Db::query('select * from  article');
            if($selectContent){
                return json($selectContent);
            }else{
                return '查询错误';
            }
        }
    }