<?php
// +----------------------------------------------------------------------
// | LTHINK框架 [ LTHINK PHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2017 橙色雷暴工作室 [ http://www.cslb.me ]
// +----------------------------------------------------------------------
// | 官方网站: http://lthink.cn
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Validate;

/**
 * 钩子验证器
 * @package app\admin\validate
 * @author Taoge <liangtao.gz@foxmail.com>
 */
class Hook extends Validate
{
    //定义验证规则
    protected $rule = [
        'name|钩子名称'  => 'require|regex:^[a-zA-Z]\w{0,39}$|unique:admin_hook'
    ];

    //定义验证提示
    protected $message = [
        'name.regex' => '钩子名称由字母和下划线组成',
    ];
}
