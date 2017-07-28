<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="<?php echo (JS_URL); ?>prototype.lite.js" type="text/javascript"></script>
    <script src="<?php echo (JS_URL); ?>moo.fx.js" type="text/javascript"></script>
    <script src="<?php echo (JS_URL); ?>moo.fx.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>skin.css" />
    <script type="text/javascript">
        window.onload = function () {
            var contents = document.getElementsByClassName('content');
            var toggles = document.getElementsByClassName('type');

            var myAccordion = new fx.Accordion(
            toggles, contents, {opacity: true, duration: 400}
            );
            myAccordion.showThisHideOpen(contents[0]);
            for(var i=0; i<document .getElementsByTagName("a").length; i++){
                var dl_a = document.getElementsByTagName("a")[i];
                    dl_a.onfocus=function(){
                        this.blur();
                    }
            }
        }
    </script>
</head>

<body>
    <table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
        <tr>
            <td width="182" valign="top">
                <div id="container">
                    <!-- *********** -->
                    <?php if($_SESSION['ID'] == '1'): ?><h1 class="type"><a href="javascript:void(0)">会员管理</a></h1>
                        <div class="content">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo (IMG_URL); ?>menu_top_line.gif" width="182" height="5" /></td>
                                </tr>
                            </table>
                            <ul class="RM">
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Member/mem_list" target="main">会员列表</a></li>
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Member/mem_add" target="main">添加会员</a></li>
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Member/mem_reg" target="main">返现管理</a></li>
                                
                                
                                
                            </ul>
                        </div>
                        <h1 class="type"><a href="javascript:void(0)">产品管理</a></h1>
                        <div class="content">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo (IMG_URL); ?>menu_top_line.gif" width="182" height="5" /></td>
                                </tr>
                            </table>
                            <ul class="RM">
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Goods/goods_sort" target="main">产品分类</a></li>
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Goods/goods_add" target="main">添加产品</a></li>
                                
                            </ul>
                        </div>
                   
                        <h1 class="type"><a href="javascript:void(0)">厂商管理</a></h1>
                        <div class="content">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo (IMG_URL); ?>menu_top_line.gif" width="182" height="5" /></td>
                                </tr>
                            </table>
                            <ul class="RM">
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Manu/manu_list" target="main">厂商列表</a></li>
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Manu/manu_add" target="main">添加厂商</a></li>
                                
                            </ul>
                        </div><?php endif; ?>

                    <?php if($_SESSION['ID'] != '1'): ?><h1 class="type"><a href="javascript:void(0)">产品管理</a></h1>
                        <div class="content">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="<?php echo (IMG_URL); ?>menu_top_line.gif" width="182" height="5" /></td>
                                </tr>
                            </table>
                            <ul class="RM">
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_sort" target="main">产品分类</a></li>
                                <li><a href="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_add" target="main">添加产品</a></li>
                                
                            </ul>
                        </div><?php endif; ?>
                    
                    
                    <h1 class="type"><a href="javascript:void(0)">系统设置</a></h1>
                    <div class="content">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="<?php echo (IMG_URL); ?>menu_top_line.gif" width="182" height="5" /></td>
                            </tr>
                        </table>
                        <ul class="RM">
                            <li><a href="/ThinkPHP/yanJing/index.php/Admin/System/password" target="main">密码修改</a></li>
                            <li><a href="/ThinkPHP/yanJing/index.php/Admin/System/security" target="main">密保修改</a></li>
                            
                        </ul>
                    </div>
                    
                </div>
            </td>
        </tr>
    </table>
</body>
</html>