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

namespace app\cms\validate;

use think\Validate;

/**
 * 单页验证器
 * @package app\cms\validate
 * @author Taoge <liangtao.gz@foxmail.com>
 */
class Page extends Validate
{
    // 定义验证规则
    protected $rule = [
        'title|页面标题'  => 'require|length:1,30'
    ];

    // 定义验证场景
    protected $scene = [
        'title' => ['title']
    ];
}
