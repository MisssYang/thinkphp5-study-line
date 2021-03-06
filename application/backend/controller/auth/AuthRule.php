<?php

namespace app\backend\controller\auth;

use app\common\controller\BaseBackend;
use houdunwang\arr\Arr;
use think\Request;

class AuthRule extends BaseBackend
{
    protected $db;

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->db = new \app\common\model\AuthRule();  //对象存储在一个db属性中
    }

    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function rulelist()
    {
        $ruleInfo = db('auth_rule')->select();
        $res = Arr::tree($ruleInfo, 'title', $fieldPri = 'id', $fieldPid = 'pid');
        $this->assign('lists', $res);
        return $this->fetch();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function store(Request $request)
    {
        if ($request->isPost()) {
            $data = (input('post.'));
            // 获取上级权限的pid
            $pLevel = db("auth_rule")->where('id', $data['pid'])->field('level')->find();
            $data['level'] = 1;
            if ($pLevel) $data['level'] = $pLevel['level'] + 1;
            $res = db('auth_rule')->insert($data);
            if ($res) {
                $this->success('success', "backend/auth.auth_rule/rulelist");
                exit;
            } else {
                $this->error('fail');
                exit;
            }
        }
    }

    /**
     * 添加子rule
     */
    public function subPage()
    {
        if (request()->isPost()) {
            $res = $this->db->store(input('post.'));
            if ($res["valid"]) {
                $this->success($res["msg"], "backend/auth.auth_rule/index");
                exit;
            } else {
                $this->error($res["msg"]);
                exit;
            }
        }
        $id = input('param.id');
        $sub = $this->db->where('id', $id)->find();
        $res = $this->db->getAll();
        $this->assign('rules', $res);
        $this->assign('sub', $sub);
        return $this->fetch();
    }


    /**
     * 编辑规则
     * @return mixed
     */
    public function edit()
    {
        $this->assign('sub_title', "规则编辑");
        if (request()->isPost()) {
            $res = $this->db->edit(input('post.'));
            if ($res["valid"]) {
                $this->success($res["msg"], "backend/auth.auth_rule/rulelist");
                exit;
            } else {
                $this->error($res["msg"]);
                exit;
            }
        }
        $id = input('param.id');
        $oldData = $this->db->find($id);
        $lastData = $this->db->getEditRule($id);
        $this->assign('old_data', $oldData);
        $this->assign('last_data', $lastData);
        return $this->fetch();
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete()
    {
        $id = input('param.id');
        $res = $this->db->del($id);
        if ($res["valid"]) {
            $this->success($res["msg"], "backend/auth.auth_rule/rulelist");
            exit;
        } else {
            $this->error($res["msg"]);
            exit;
        }
    }

    public function jquery(){
        return $this->fetch();
    }
}
