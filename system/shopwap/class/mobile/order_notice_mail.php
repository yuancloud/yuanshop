<?php
defined('SYSTEM_IN') or exit('Access Denied');
function mailnotice($orderid)
	{
		
	if(empty($orderid))
	{
return;	
	}
		$settings=globaSetting();
		
		if(empty($settings['smtp_openmail']))
	{
return;
	}
		   
	 $order = mysqld_select("select * from " . table('shop_order') . " where id='".$orderid."'");
     $ordergoods = mysqld_selectall("SELECT goodsid, total,price,optionname FROM " . table('shop_order_goods') . " WHERE orderid = '{$orderid}'", array(), 'goodsid');
           
	        if (!empty($ordergoods)) {
                $goods = mysqld_selectall("SELECT id, title, thumb, marketprice, total,credit FROM " . table('shop_goods') . " WHERE id IN ('" . implode("','", array_keys($ordergoods)) . "')");
            }
            $good_line="";
            		if (!empty($goods)) {
            			$good_line .= "<table>";
			$good_line .= "<tr><th style=\"text-align:left;\">名称</th><th  style=\"text-align:center;width:50px\">数量</th><th  style=\"text-align:center;width:50px\">单价</th>";
			$good_line .= "</tr>";
                    foreach ($goods as $row) {
                    	
                    	if(empty($paytitle))
                    	{
                    		$paytitle=$row['title'];
                    	}
                    	$optionname=$ordergoods[$row['id']]['optionname'];
                    	if(!empty($optionname))
                    	{
                    		$optionname='['.$optionname.']';
                    	}
                    	
                    	
				$good_line .= "<tr><td  style=\"text-align:left\">{$optionname}{$row['title']}";
			$good_line .= "</td><td  style=\"text-align:center\">{$ordergoods[$row['id']]['total']} </td>";
			$good_line .= "	<td  style=\"text-align:center\">{$ordergoods[$row['id']]['price']} </td></tr>";
                    	
                      }
                      
	$good_line .= "	</table>";
                }
                $order_sn=$order['ordersn'];
                        $time=date('Y-m-d H:i:s', $order['createtime']);
                      $good_price=$order['goodsprice'];
                       $dispatch_price=$order['dispatchprice'];
                        $order_price=$order['price'];
                        $dispatch_realname=$order['address_realname'];
                        $dispatch_tell=$order['address_mobile'];
                        $dispatch_address=$order['address_province'].$order['address_city'].$order['address_area'].$order['address_address'];


$previewtmp=$settings['mailtemplate'];            
  for($i=1;$i<3;$i++)
	{
		 $previewtmp=str_replace("{order_sn}",$order_sn,$previewtmp);
		  $previewtmp=str_replace("{time}",$time,$previewtmp);
		  $previewtmp=str_replace("{good_line}",$good_line,$previewtmp);
		   $previewtmp=str_replace("{good_price}",$good_price,$previewtmp);
		    $previewtmp=str_replace("{dispatch_price}",$dispatch_price,$previewtmp);
		      $previewtmp=str_replace("{order_price}",$order_price,$previewtmp);
		        $previewtmp=str_replace("{dispatch_realname}",$dispatch_realname,$previewtmp);
		          $previewtmp=str_replace("{dispatch_tell}",$dispatch_tell,$previewtmp);
		     $previewtmp=str_replace("{dispatch_address}",$dispatch_address,$previewtmp);
	}
             
             require_once WEB_ROOT.'/includes/lib/phpmailer/PHPMailerAutoload.php';   
                  
             //******************** 配置信息 ********************************
	$smtpserver = $settings['smtp_server'];//SMTP服务器 
	$smtpauthmode =intval($settings['smtp_authmode']);//SMTP服务器端口
	$smtp_sendtype=intval($settings['smtp_sendtype']);
	$smtpserverport =intval($settings['smtp_port']);//SMTP服务器端口
	$smtpusermail = $settings['smtp_mail'];//SMTP服务器的用户邮箱
	$smtpemailto = $settings['smtp_to_mail'];//发送给谁
	$smtpuser = $settings['smtp_username'];//SMTP服务器的用户帐号
	$smtppass = $settings['smtp_passwd'];//SMTP服务器的用户密码
	$mailtitle =  $settings['smtp_title'];//邮件主题
	$mailcontent = $previewtmp;//邮件内容
	
	
 require_once WEB_ROOT.'/system/common/extends/mail.php'; 
 @extends_mail($smtp_sendtype,0,$smtpserver,$smtpauthmode,$smtpserverport,$smtpusermail,$smtpemailto,$smtpuser,$smtppass,$mailtitle,$mailcontent);

	}
	
global $_CMS;
	 if($_CMS['addons_bj_hx']) {
	 	if(empty($orderid))
	 	{
	 	$orderid=$order['id'];	
	 	}
	 	if(!empty($orderid))
	 	{
 $order = mysqld_select("select * from " . table('shop_order') . " where id='".$orderid."'");
 	if($order['isverify']==1&&$order['status']>=1)
 	{
 		
 			$from=mysqld_select('SELECT * FROM '.table('weixin_wxfans')." WHERE   openid = :openid limit 1" , array(':openid' =>$order['openid']));
			if(!empty($from['weixin_openid']))
			{
            $bj_hx_order_qr=bj_hx_order_qr( $order['ordersn']);
            
          
					$turl= WEBSITE_ROOT.create_url('mobile', array('name' => 'shopwap','do' => 'myorder','orderid' => $orderid,'op'=>'detail'));
            $picurl=WEBSITE_ROOT.$bj_hx_order_qr;
            weixin_send_custom_msgnews($from['weixin_openid'],'您的订单支付成功，您需凭本条微信内容，到点提货！',$turl,$picurl,'请出示以上二维码给前台扫描！');
          }
 	}
	 	
            }
  }
	 if($_CMS['addons_bj_message']) {
	 	if(!empty($orderid))
	 	{
 $order = mysqld_select("select * from " . table('shop_order') . " where id='".$orderid."'");
 
	 	
              bj_message_sendddzfcgtz( $order['ordersn'],$order['price'],$order['openid'],$orderid);
            }
  }