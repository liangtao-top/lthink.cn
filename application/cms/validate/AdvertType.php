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
 * 广告分类验证器
 * @package app\cms\validate
 * @author Taoge <liangtao.gz@foxmail.com>
 */
class AdvertType extends Validate
{
    // 定义验证规则
    protected $rule = [
        'name|分类名称'  => 'require|length:1,30|unique:cms_advert_type'
    ];

    // 定义验证场景
    protected $scene = [
        'name' => ['name']
    ];
}
