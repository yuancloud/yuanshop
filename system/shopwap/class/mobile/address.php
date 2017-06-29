<?php
$settings=globaSetting();
				$member=get_member_account();
				$openid =$member['openid'] ;
				 $from = $_GP['from'];
        $returnurl = urldecode($_GP['returnurl']);
        $operation = $_GP['op'];
        if ($operation == 'post') {
            $id = intval($_GP['id']);
            $data = array(
                'openid' => $openid,
                'realname' => $_GP['realname'],
                'mobile' => $_GP['mobile'],
                'province' => $_GP['province'],
                'city' => $_GP['city'],
                'area' => $_GP['area'],
                'address' => $_GP['address'],
            );
            if (empty($_GP['realname']) || empty($_GP['mobile']) || empty($_GP['address'])) {
                message('请输完善您的资料！');
            }
            if (!empty($id)) {
                unset($data['openid']);
                mysqld_update('shop_address', $data, array('id' => $id));
                message($id, '', 'ajax');
            } else {
                mysqld_update('shop_address', array('isdefault' => 0), array( 'openid' => $openid));
                $data['isdefault'] = 1;
                mysqld_insert('shop_address', $data);
                $id = mysqld_insertid();
			
                if (!empty($id)) {
                    message($id, '', 'ajax');
                } else {
                    message(0, '', 'ajax');
                }
            }
        } elseif ($operation == 'default') {
            $id = intval($_GP['id']);
            mysqld_update('shop_address', array('isdefault' => 0), array('openid' =>$openid));
            mysqld_update('shop_address', array('isdefault' => 1), array('id' => $id));
            message(1, '', 'ajax');
        } elseif ($operation == 'detail') {
            $id = intval($_GP['id']);
            $row = mysqld_select("SELECT id, realname, mobile, province, city, area, address FROM " . table('shop_address') . " WHERE id = :id", array(':id' => $id));
            message($row, '', 'ajax');
        } elseif ($operation == 'remove') {
            $id = intval($_GP['id']);
            if (!empty($id)) {
                $address = mysqld_select("select isdefault from " . table('shop_address') . " where id='{$id}'  and openid='".$openid."' limit 1 ");

                if (!empty($address)) {
                    //修改成不直接删除，而设置deleted=1
                    mysqld_update("shop_address", array("deleted" => 1, "isdefault" => 0), array('id' => $id, 'openid' => $openid));

                    if ($address['isdefault'] == 1) {
                        //如果删除的是默认地址，则设置是新的为默认地址
                        $maxid = mysqld_selectcolumn("select max(id) as maxid from " . table('shop_address') . " where  openid='".$openid."' limit 1 ");
                        if (!empty($maxid)) {
                            mysqld_update('shop_address', array('isdefault' => 1), array('id' => $maxid, 'openid' => $openid));
                            die(json_encode(array("result" => 1, "maxid" => $maxid)));
                        }
                    }
                }
            }
            die(json_encode(array("result" => 1, "maxid" => 0)));
        } else {    
            $address = mysqld_selectall("SELECT * FROM " . table('shop_address') . " WHERE deleted=0 and openid = :openid", array(':openid' => $openid));
            
            if ( is_use_weixin()) {
            	if(!empty($settings['weixin_autoaddress']))
            	{
            	   if(empty($address)||count($address)==0)
				         {
				         	
				      
				            	$signPackage=weixin_js_signPackage();
				      
				       
						
						
						 		$addressSignInfo=weixin_address_signInfo("http://".$_SERVER[HTTP_HOST]."".$_SERVER['REQUEST_URI'],$signPackage);
						 		if(!empty(	$addressSignInfo))
						 		{
						 			
						 				$useWeixinAddr=true;
						 		}
				       	}
     				 }
            	
            }
            
            include themePage('address');
        }