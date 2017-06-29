<?php
// +----------------------------------------------------------------------
// | WE CAN DO IT JUST FREE
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.yuancloud.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: YuanCloud <电话:400-8191819> <http://www.yuancloud.cn>
// +----------------------------------------------------------------------
defined('SYSTEM_IN') or exit('Access Denied');
$alipaythirdlogin = mysqld_select("SELECT * FROM " . table('thirdlogin') . " WHERE enabled=1 and `code`='alipay'");

if(!empty($alipaythirdlogin)&&!empty($alipaythirdlogin['id']))
{

		require_once WEB_ROOT.'/includes/lib/alipaySDK/config.php';
			require_once WEB_ROOT.'/includes/lib/alipaySDK/AopSdk.php';
		if (! empty ( $_GP["auth_code"] )) {
			$auth_code =  $_GP["auth_code"];
			require_once WEB_ROOT.'/includes/lib/alipaySDK/UserInfo.php';
			
			$userinfo = new UserInfo ();
			$alipay_user=$userinfo->getUserInfo ( $auth_code );
			if(!empty($alipay_user))
			{
		
						$alipay_openid = $alipay_user->user_id;
					if(!empty($alipay_openid)&&(!empty($_SESSION[MOBILE_ALIPAY_OPENID])&&$_SESSION[MOBILE_ALIPAY_OPENID]!=$alipay_openid)||empty($_SESSION[MOBILE_ALIPAY_OPENID]))
					{
								$nickname = characet ( $alipay_user->deliver_fullname );
						$follow=1;
						$avatar = $alipay_user->avatar;
							$gender = $alipay_user->gender;
							$gender=($gender=='F')?2:($gender=='M'?1:0);
					$fans = mysqld_select("SELECT * FROM " . table('alipay_alifans') . " WHERE alipay_openid=:alipay_openid ", array(':alipay_openid' =>$alipay_openid));
				 
				 if(empty($fans['alipay_openid']))
					{
						  		$row = array(
							'nickname'=> $nickname,
							'follow' => $follow,
							'gender' => intval($gender),
							'alipay_openid' => $alipay_openid,
							'avatar'=>'',
							'createtime' => TIMESTAMP
						);
							mysqld_insert('alipay_alifans', $row);	
							if(!empty($avatar)){
						mysqld_update('alipay_alifans', array('avatar'=>$avatar), array('alipay_openid' => $alipay_openid));	
							}
						}else
						{
							
							$row = array(
							'nickname'=> $nickname,
							'follow' => $follow,
							'gender' => intval($gender),
							'avatar'=>''
						);
						
						mysqld_update('alipay_alifans', $row, array('alipay_openid' => $alipay_openid));	
						
						
								if(!empty($avatar)){
						mysqld_update('alipay_alifans', array('avatar'=>$avatar), array('alipay_openid' => $alipay_openid));	
							}
							
						}
						
		
						$_SESSION[MOBILE_ALIPAY_OPENID]=$alipay_openid;
						$sessionAccount=array('openid'=>$alipay_openid);
						$_SESSION[MOBILE_SESSION_ACCOUNT]=$sessionAccount;
						member_login_alipay($alipay_openid);
					}
						
			}
		}
}