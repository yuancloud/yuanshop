<?php defined('SYSTEM_IN') or exit('Access Denied');?><?php  include page('header');?>
<h3 class="header smaller lighter blue">微支付配置</h3>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 支付方式名称：</label>

										<div class="col-sm-9">
													微信支付&nbsp;&nbsp;<a target="_blank" href="http://bbs.yuancloud.cn/forum-36-1.html ">配置帮助</a>
												
										</div>
									</div>
		
		 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 支付方式描述：</label>

										<div class="col-sm-9">
													  <?php  echo $item['desc'];?>
										</div>
									</div>
									
										 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 微信支付开发配置(<a href="http://mp.weixin.qq.com" target="_blank">mp.weixin.qq.com</a>)：</label>

										<div class="col-sm-9">
													  	<p>支付授权目录：<?php echo WEBSITE_ROOT?></p>
									<p>支付回调URL：<?php echo WEBSITE_ROOT?>notify/weixin_native_notify.php</p>
										</div>
									</div>
											 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 微信公众号AppId：</label>

										<div class="col-sm-9">
											<?php  echo $settings['weixin_appId'];?> &nbsp;&nbsp;<a href="<?php  echo create_url('site', array('name' => 'weixin','do' => 'setting'))?>"><strong style="font-size:16px">修改</strong></a>
										</div>
									</div>
									
												 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 微信公众号AppSecret：</label>

										<div class="col-sm-9">
											<?php  echo $settings['weixin_appSecret'];?>  
										</div>
									</div>


			
				 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 微信支付商户号(MchId)：</label>

										<div class="col-sm-9">
											<input type="text" name="weixin_pay_mchId" class="col-xs-10 col-sm-4"  value="<?php  echo $configs['weixin_pay_mchId'];?>" />
										</div>
									</div>
									
									
												 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 通信密钥/商户支付密钥(paySignKey/api密钥)：</label>

										<div class="col-sm-9">
											 <input type="text" name="weixin_pay_paySignKey" class="col-xs-10 col-sm-4" value="<?php  echo $configs['weixin_pay_paySignKey'];?>" />
										</div>
									</div>

												 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 排序优先级：</label>

										<div class="col-sm-9">
													  <input type="text" class="col-xs-10 col-sm-2" name="pay_order" value="<?php  echo $item['order'];?>" />
                   <p class="help-block">越大支付时候显示越前</p>
										</div>
									</div>
									
									
											 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 是否货到付款：</label>

										<div class="col-sm-9">
													    <?php if(empty($item['iscod'])||$item['iscod']==0){?>
         										否<?php }else{ ?>
                                是
                                 <?php }?> 
										</div>
									</div>
									
										 <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" > 是否在线支付：</label>

										<div class="col-sm-9">
													     <?php if(empty($item['online'])||$item['online']==0){?>
         	否<?php }else{ ?>
                                是
                                 <?php }?> 
										</div>
									</div>
									
									
												  <div class="form-group">
										<label class="col-sm-2 control-label no-padding-left" for="form-field-1"> </label>

										<div class="col-sm-9">
										<input name="submit" type="submit" value=" 提 交 " class="btn btn-info"/>
										
										</div>
									</div>
		</form>
