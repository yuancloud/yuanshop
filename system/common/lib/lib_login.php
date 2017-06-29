<?php
// +----------------------------------------------------------------------
// | WE CAN DO IT JUST FREE
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.yuancloud.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: YuanCloud <电话:400-8191819> <http://www.yuancloud.cn>
// +----------------------------------------------------------------------
defined('SYSTEM_IN') or exit('Access Denied');
if ( is_use_weixin()) {
$weixinthirdlogin = mysqld_select("SELECT * FROM " . table('thirdlogin') . " WHERE enabled=1 and `code`='weixin'");

if(!empty($weixinthirdlogin)&&!empty($weixinthirdlogin['id']))
{
	$weixin_openid=get_weixin_openid();

	if(!empty($weixin_openid))
	{
		member_login_weixin($weixin_openid);
	}
}
}