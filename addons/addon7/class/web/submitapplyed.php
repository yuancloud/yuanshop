<?php
$request = mysqld_select("select * FROM " . table('addon7_request') . " where id=:id",array(":id"=>intval($_GP['id'])));
if(!empty($request['award_id'])&&empty($request['status']))
{
	$award = mysqld_select("select * FROM " . table('addon7_award') . " where id=:id",array(":id"=>intval($request['award_id'])));
	if($award['awardtype']==1)
	 {
	 	if(!empty($award['gold']))
	 	{
	 		
	     				member_gold($request['openid'],$award['gold'],'addgold','积分兑换商品,兑换id:'.$request['award_id']);
	     				
	
	   mysqld_update('addon7_award', array('amount'=>intval($award['amount'])-1),array("id"=>intval($award['id'])));
	 	}
	 	
	}else
	{
		
	   mysqld_update('addon7_request',array("status"=>"1"),array("id"=>intval($_GP['id'])));
	   
	   mysqld_update('addon7_award', array('amount'=>intval($award['amount'])-1),array("id"=>intval($award['id'])));
	}
	
}
			        message('兑换成功！', 'refresh', 'success');
