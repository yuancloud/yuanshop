<?php
/**
 * Created by PhpStorm.
 * User: sswy
 * Date: 5/9/16
 * Time: 9:44 PM
 * 水电瓦
 */
//require 'mycart.php';
//require_once '../../mobile.php';
$member=get_member_account(false);
$openid = $member['openid'];
$goodssn='13102';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13078';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13068';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13082';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13086';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13056';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13104';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13096';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13064';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13060';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13090';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='13046';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='13048';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='7743';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='11673';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='7904';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='6181';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='8055';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='6485';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='6364';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='6502';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='2513';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='6434';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='6360';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='7726';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='11948';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='6422';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='10509';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='10530';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }

}$goodssn='6866';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
$goodssn='6869';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='10687';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='2205';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='9074';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='3481';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}$goodssn='3481';
$total=1;
$condition = " AND ((goods.goodssn = '".$goodssn."' or goods_options.goodssn = '".$goodssn."'))";
$list = mysqld_selectall("SELECT DISTINCT goods.id as id,goods_options.id as sub_id,goods_options.goodssn as sub_sn FROM " . table('shop_goods') . " goods left join ".table('shop_goods_option')." goods_options on goods_options.goodsid=goods.id WHERE  goods.deleted=0 $condition ORDER BY goods.status DESC, goods.displayorder DESC, goods.id DESC");
if (count($list)>0)
{
    for($i=0;$i<count($list);$i++)
    {
        $id=$list[$i]['id'];
        $optionid=$list[$i]['sub_id'];
        $result=addcart($id,$total,$optionid,$openid);
    }
}
////返回数据
$carttotal = $this->getCartTotal();
echo $carttotal;
$carturl=mobile_url('mycart',array('do'=>'mycart'));
header('Location:'.$carturl);
exit(0);

function addcart($goodsid,$total,$optionid,$openid)
{
    $goodsid = intval($goodsid);
    $total = intval($total);
    $total = empty($total) ? 1 : $total;
    if (!empty($optionid)){
    $optionid = intval($optionid);}
    $goods = mysqld_select("SELECT id, type, total,marketprice,isverify FROM " . table('shop_goods') . " WHERE id = :id and deleted=0 and status=1", array(':id' => $goodsid));
    if (empty($goods)) {
        $result['message'] = '抱歉，该商品不存在或是已经被删除！';
        message($result, '', 'ajax');
    }
    if (!empty($goods['isverify'])) {
        $result['message'] = '抱歉，核销商品不能加入购物车，请自己点击购买！';
        message($result, '', 'ajax');
    }
    $marketprice = $goods['marketprice'];
    $goodsOptionStock=0;
    $goodsOptionStock=$goods['total'];
    if (!empty($optionid)) {
        $option = mysqld_select("select marketprice,stock from " . table('shop_goods_option') . " where id=:id limit 1", array(":id" => $optionid));
        if (!empty($option)) {
            $marketprice = $option['marketprice'];
            $goodsOptionStock=$option['stock'];
        }
    }
    if($goodsOptionStock<$total&&$goodsOptionStock!=-1)
    {
        $result = array(
            'result' => 0,
            'maxbuy' => $goodsOptionStock
        );
        #die(json_encode($result));
        #exit;
        return;
    }
    $row = mysqld_select("SELECT id, total FROM " . table('shop_cart') . " WHERE session_id = :session_id  AND goodsid = :goodsid  and optionid=:optionid", array(':session_id' => $openid, ':goodsid' => $goodsid,':optionid'=>$optionid));
    if ($row == false) {
        //不存在
        $data = array(
            'goodsid' => $goodsid,
            'goodstype' => $goods['type'],
            'marketprice' => $marketprice,
            'session_id' => $openid,
            'total' => $total,
            'optionid' => $optionid
        );
        mysqld_insert('shop_cart', $data);
    } else {
        //累加最多限制购买数量
        $t = $total + $row['total'];

        //存在
        $data = array(
            'marketprice' => $marketprice,
            'total' => $t,
            'optionid' => $optionid
        );
        mysqld_update('shop_cart', $data, array('id' => $row['id']));
    }
    return true;
}

