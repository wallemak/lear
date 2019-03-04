<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\DB;
class User extends Controller
{

    public function __construct()
    {
        $this->db = new DB;
    }

    protected $middlewart = [
        'login' //没有参数,表示该控制器内所有方法都会执行这个中间件
        // 'login' => ['except' => ['index'] ] 除了index 的所有方法都执行。
        // 'login' => ['only' => ['index'] ] 只有index 方法执行

    ];
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
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

    public function user_list()
    {

        $list = DB::name('vip')->select();
        return ['error'=>0,'list'=>$list];
    }
}
