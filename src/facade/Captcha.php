<?php

namespace tpcore\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package tpcore\captcha\facade
 * @mixin \tpcore\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \tpcore\captcha\Captcha::class;
    }
}
