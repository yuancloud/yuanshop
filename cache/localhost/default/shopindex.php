<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $cfg['shop_title'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="http://localhost:32185/themes/default/__RESOURCE__/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost:32185/themes/default/__RESOURCE__/css/base.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost:32185/themes/default/__RESOURCE__/css/iconfont.css"/>
    <script type="text/javascript" src="http://localhost:32185/themes/default/__RESOURCE__/js/jquery-1.11.3.min.js"></script>
</head>
<body>
<div class="container cboxshadow">
<div class="indexsearch">
        <form action="mobile.php" id="searchForm" name="searchForm" class="form-inline">
            <input type="hidden" name="mod" value="mobile"/>
            <input type="hidden" name="do" value="goodlist"/>
            <input type="hidden" name="name" value="shopwap"/>
            <input name="keyword" id="search_word" placeholder="请输入商品名进行搜索！" type="text" class="inputwidth">
            <lable><a href="<?php echo mobile_url('listCategory')?>"><i id="fi" class="iconfont bjicon-listbullet"></i></a>
            </lable>
        </form>
</div>
    <div class="row">
        <div class="slider card card-nomb" style="visibility: visible;">
            <script type="text/javascript" src="http://localhost:32185/themes/default/__RESOURCE__/js/TouchSlide.1.1.js"></script>
            <div id="focus" class="focus">
                <div class="hd">
                    <ul>
                    </ul>
                </div>
                <div class="bd">
                    <ul>
                        <?php if(is_array($advs)) { foreach($advs as $adv) { ?>
                        <li>
                            <a href="<?php if(empty($adv['link'])) { ?><?php } else { ?><?php echo $adv['link'];?><?php } ?>">
                                <img src="<?php echo WEBSITE_ROOT;?>/attachment/<?php echo $adv['thumb'];?>"/></a>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                TouchSlide({
                    slideCell: "#focus",
                    titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                    mainCell: ".bd ul",
                    delayTime: 600,
                    interTime: 4000,
                    effect: "leftLoop",
                    autoPlay: true,//自动播放
                    autoPage: true, //自动分页
                    switchLoad: "_src" //切换加载，真实图片路径为"_src"
                });
            </script>
        </div>
    </div>
    <div class="row ptb10">
        <div class="col-xsl-2">
            <a href="<?php echo mobile_url('goodlist')?>">
                <img class="img-responsive" src="http://localhost:32185/themes/default/__RESOURCE__/images/t1.jpg" style="display: inline;">
                <span>全部商品</span>
            </a>
        </div>
    <div class="col-xsl-2">
            <a href="<?php echo mobile_url('myorder',array('status'=>99))?>">
                <img class="img-responsive" src="http://localhost:32185/themes/default/__RESOURCE__/images/t6.png" style="display: inline;">
                <span>我的订单</span>
            </a>
        </div>

        <div class="col-xsl-2">
            <a href="<?php echo mobile_url('bonus')?>">
                <img class="img-responsive" src="http://localhost:32185/themes/default/__RESOURCE__/images/t5.png" style="display: inline;">
                <span>优惠券</span>
            </a>
        </div>

        <div class="col-xsl-2">
            <a href="<?php echo mobile_url('help')?>">
                <img class="img-responsive" src="http://localhost:32185/themes/default/__RESOURCE__/images/t2.png" style="display: inline;">
                <span>购物须知</span>
            </a>
        </div>

        <div class="col-xsl-2">
            <a href="<?php echo mobile_url('rechargegold')?>">
                <img class="img-responsive" src="http://localhost:32185/themes/default/__RESOURCE__/images/t5.png" style="display: inline;">
                <span>我的余额</span>
            </a>
        </div>
    </div>
    <div class="row">
        <div id="home-page">
            <div role="main" class="ui-content ">
                <div class="home-categories">
                    <div class="category-container" style="background-color:#ffffff;">
                        <div class="category-name">
                            <a class="category-url" href="#">
                                <div class="name-border"></div>
                                <div class="name">热卖推荐</div>
                                <div class="name-more">
                                    <i class="icons-arrow-right2"></i>
                                </div>
                                <div class="text-more"></div>

                        </div>

                        </a>
                    </div>
                    <ul class="os_box_list">
                        <?php foreach($category as $row){ ?>

                        <?php foreach($row['list'] as $item){ ?>
                        <?php if($item['isrecommand']==1&&$item['ishot']==1){ ?>
                        <li>
                            <a href="<?php echo mobile_url('detail', array('id' => $item['id']))?>" class="item">

                                <div class="img"><img
                                        src="<?php echo WEBSITE_ROOT;?>/attachment/<?php echo $item['thumb']?>"
                                        usesrc="1" alt=""></div>
                                <div class="txt"><?php echo $item['title'];?></div>

                                <div class="buy">
                                    <span class="price">
                                        <strong><em>¥
                                            <?php echo $item['marketprice'];?></em>
                                        </strong>
                                        <del>
                                            ¥<?php echo $item['productprice'];?></del>
                                    </span>

                                </div>
                                <i class="tag-home5"></i>
                            </a>
                        </li>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                    </ul>

                    <?php foreach($category as $row){ ?>
                    <div class="category-container" style="background-color:#ffffff;">
                        <div class="category-name">
                            <a class="category-url"
                               href="<?php echo mobile_url('goodlist', array('pcate' => $row['id']));?>">
                                <div class="name-border"></div>
                                <div class="name"><?php echo $row['name'];?></div>
                                <div class="name-more">
                                    <i class="icons-arrow-right2"></i>
                                </div>
                                <div class="text-more"><a
                                        href="<?php echo mobile_url('goodlist', array('pcate' => $row['id']));?>"
                                        style="color:#333;font-size: 12px">更多>></a></div>

                        </div>

                        </a>
                    </div>


                    <ul class="os_box_list">


                        <?php foreach($row['list'] as $item){ ?>

                        <li>
                            <a href="<?php echo mobile_url('detail', array('id' => $item['id']))?>" class="item">

                                <div class="img"><img
                                        src="<?php echo WEBSITE_ROOT;?>/attachment/<?php echo $item['thumb']?>"
                                        usesrc="1" alt=""></div>
                                <div class="txt"><?php echo $item['title'];?></div>

                                <div class="buy">
                                    <span class="price"><strong><em>¥
                                        <?php echo $item['marketprice'];?></em></strong><del>¥
                                        <?php echo $item['productprice'];?></del></span>

                                </div>
                            </a>
                        </li>

                        <?php } ?>


                    </ul>
                    <?php } ?>


                </div>

            </div>
        </div>
    </div>

    <?php include page('footer');?>
</div>
<?php include themePage('footer');?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("#submit").click(function () {
            if ($("#search_word").val()) {
                $("#searchForm").submit();
            } else {
                alert("请输入关键词！");
                return false;
            }
        });


    });
</script>
</body>
</html>