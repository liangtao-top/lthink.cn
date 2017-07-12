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

/**
 * 插件控制器
 * @package app\index\home
 */
class Plugin extends Home
{
    /**
     * 执行插件内部方法
     * @author Taoge <liangtao.gz@foxmail.com>
     * @return mixed|void
     */
    public function execute()
    {
        $plugin     = input('param._plugin');
        $controller = input('param._controller');
        $action     = input('param._action');
        $params     = $this->request->except(['_plugin', '_controller', '_action'], 'param');

        if (empty($plugin) || empty($controller) || empty($action)) {
            return $this->error('没有指定插件名称、控制器名称或操作名称');
        }

        if (!plugin_action_exists($plugin, $controller, $action)) {
            return $this->error("找不到方法：{$plugin}/{$controller}/{$action}");
        }
        return plugin_action($plugin, $controller, $action, $params);
    }
}
