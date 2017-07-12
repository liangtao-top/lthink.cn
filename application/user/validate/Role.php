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

namespace app\user\validate;

use think\Validate;

/**
 * 角色验证器
 * @package app\admin\validate
 * @author Taoge <liangtao.gz@foxmail.com>
 */
class Role extends Validate
{
    //定义验证规则
    protected $rule = [
        'pid|所属角色'   => 'require',
        'name|角色名称' => 'require|unique:admin_role',
    ];
}