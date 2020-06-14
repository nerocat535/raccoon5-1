<?php


namespace app\author\controller;


use app\BaseController;
use think\facade\View;

class Base extends BaseController
{
    protected $uid;
    protected $username;
    protected $author_name;
    protected function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->uid = session('xwx_author_id');
        $this->username = session('xwx_author');
        $this->author_name = session('xwx_author_name');
        if (is_null($this->uid)){
            $this->redirect(url('account/login'));
        }
        View::assign([
            'site_name' => config('site.site_name')
        ]);
    }
}