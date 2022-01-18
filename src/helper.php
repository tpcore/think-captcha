<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liuchenglong <hi@liuchenglong.com>
// +----------------------------------------------------------------------

use tpcore\captcha\facade\Captcha;
use think\facade\Route;
use think\Response;

/**
 * @param string $config
 * @return \think\Response
 */
function captcha($config = null): Response
{
    return Captcha::create($config);
}


/**
 * @param string $key
 * @param string $value
 * @return bool
 */
function captcha_check($key,$value)
{
    return Captcha::check($key,$value);
}
