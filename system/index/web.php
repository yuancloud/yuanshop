<?php
// +----------------------------------------------------------------------
// | WE CAN DO IT JUST FREE
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.yuancloud.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: YuanCloud <电话:400-8191819> <http://www.yuancloud.cn>
// +----------------------------------------------------------------------
defined('SYSTEM_IN') or exit('Access Denied');

class indexAddons  extends BjSystemModule {
	public function do_changepwd()
	{
		$this->__web(__FUNCTION__);
	}
	public function do_center()
	{
		$this->__web(__FUNCTION__);
	}
	public function do_Main()
	{
		$this->__web(__FUNCTION__);
	}
		public function do_keupload()
	{
		$this->__web(__FUNCTION__);
	}
		
	public function do_file_ueupload()
	{
		$this->__web(__FUNCTION__);
	}
	public function do_ueupload()
	{
		$this->__web(__FUNCTION__);
	}
	
	public function dateToWeekday($dateindex)
	{
		if($dateindex==1)
		{
			return '周一';
		}
			if($dateindex==2)
		{
			return '周二';
		}
			if($dateindex==3)
		{
			return '周三';
		}
			if($dateindex==4)
		{
			return '周四';
		}
			if($dateindex==5)
		{
			return '周五';
		}
			if($dateindex==6)
		{
			return '周六';
		}
			if($dateindex==7)
		{
			return '周日';
		}
		return "";
	}
	


	
}


