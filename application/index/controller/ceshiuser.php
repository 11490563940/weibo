<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class ceshiuser extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
    public function appuser()
    {
        if (request()->isPost()){
            if(strlen(input('phone')) != 11){
                return $this->error('手机号格式不正确');
            }
            $data = [
                'name'=>input('name'),
                'sex'=>input('sex'),
                'age'=>input('age'),
                'phone'=>input('phone')
            ];
            if(Db('ceshiuser')-> insert($data)){
                return $this->success('添加成功','/weibo/public/index/Ceshiuser/index');
            }else{
                return $this->error('添加失败');
            }
        }
    }
}
