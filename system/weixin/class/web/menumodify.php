<?php
defined('SYSTEM_IN') or exit('Access Denied');
	hasrule('weixin','weixin');
			$menu=$_GP['menudate'];
		$return= $this->menuCreate($menu);
		if($return==true)
		{
		message('修改成功', 'refresh', 'success');	
		}else
		{
						message($return);	
			}
