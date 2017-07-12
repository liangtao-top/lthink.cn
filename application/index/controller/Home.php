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

namespace app\index\controller;

use app\common\controller\Common;

/**
 * 前台公共控制器
 * @package app\index\controller
 */
class Home extends Common
{
    /**
     * 初始化方法
     * @author Taoge <liangtao.gz@foxmail.com>
     */
    protected function _initialize()
    {
        // 系统开关
        if (!config('web_site_status')) {
            $this->error('站点已经关闭，请稍后访问~');
        }
    }
}
