<?php
// +----------------------------------------------------------------------
// | WE CAN DO IT JUST FREE
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.yuancloud.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: YuanCloud <电话:400-8191819> <http://www.yuancloud.cn>
// +----------------------------------------------------------------------
defined('SYSTEM_IN') or exit('Access Denied');
defined('LOCK_TO_ADDONS_INSTALL') or exit('Access Denied');
$sql = "
delete from `yuanshop_modules` where `name`='addon6';
delete from `yuanshop_modules_menu` where `module`='addon6';
INSERT INTO `yuanshop_modules` (`icon`,`group`,`title`,`version`,`name`) VALUES ('icon-bar-chart', 'addons', '数据报表', '1.0', 'addon6');
INSERT INTO `yuanshop_modules_menu`(`href`,`title`,`module`) VALUES ('index.php?mod=site&name=addon6&do=salereport', '零售生意报告', 'addon6');
INSERT INTO `yuanshop_modules_menu`(`href`,`title`,`module`) VALUES ('index.php?mod=site&name=addon6&do=orderstatistics', '订单统计', 'addon6');
INSERT INTO `yuanshop_modules_menu`(`href`,`title`,`module`) VALUES ('index.php?mod=site&name=addon6&do=saledetails', '商品销售明细', 'addon6');
INSERT INTO `yuanshop_modules_menu`(`href`,`title`,`module`) VALUES ('index.php?mod=site&name=addon6&do=saletargets', '销售指标分析', 'addon6');
INSERT INTO `yuanshop_modules_menu`(`href`,`title`,`module`) VALUES ('index.php?mod=site&name=addon6&do=productsaleranking', '商品销售排行', 'addon6');
INSERT INTO `yuanshop_modules_menu`(`href`,`title`,`module`) VALUES ('index.php?mod=site&name=addon6&do=productsalestatistics', '商品访问与购买比', 'addon6');
INSERT INTO `yuanshop_modules_menu`(`href`,`title`,`module`) VALUES ('index.php?mod=site&name=addon6&do=memberranking', '会员消费排行', 'addon6');
INSERT INTO `yuanshop_modules_menu`(`href`,`title`,`module`) VALUES ('index.php?mod=site&name=addon6&do=userincreasestatistics', '会员增长统计', 'addon6');
";

mysqld_batch($sql);