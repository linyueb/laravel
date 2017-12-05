<?php
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2017/12/5
 * Time: 下午12:12
 */

if (!function_exists('newRedis')){
    function newRedis(){
        return new \Predis\Client();
    }
}