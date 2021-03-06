<?php
/**
 * 文件名：index.php
 * 版权：Copyright 2010 WuTao. Co. Ltd. All Rights Reserved.
 * 描述：FlySolo程序入口文件a
 * 创建人：吴涛
 * 创建时间：2010-01-25 10:13
 * 版本: 1.0V
 */

/**
 * 判断PHP版本
 */
if (version_compare(phpversion(), '5.2.0', '<')===true) {
    echo  '<div style="font:12px/1.35em arial, helvetica, sans-serif;"><div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;"><h3 style="margin:0; font-size:1.7em; font-weight:normal; text-transform:none; text-align:left; color:#2f2f2f;">你的PHP版本太低！</h3></div><p>FlySolo支持PHP 5.2.0或更新版本。</p></div>';
    exit;
}

/**
 *  定义错误
 */
error_reporting(E_ALL | E_STRICT);
/**
 * 是否说开发模式
 */
define('DEVMODE', true);
include_once 'app/Fly.php';
Fly::run('member');