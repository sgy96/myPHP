<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title>眼镜店管理中心</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="眼镜店管理管理系统" />
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>skin.css" />
</head>
<frameset rows="64,*"  frameborder="no" border="0" framespacing="0">
    <!--头部-->
    <frame src="/ThinkPHP/yanJing/index.php/Admin/Index/top" name="top" noresize="noresize" frameborder="0"  scrolling="no" marginwidth="0" marginheight="0" />
    <!--主体部分-->
    <frameset cols="185,*">
        <!--主体左部分-->
        <frame src="/ThinkPHP/yanJing/index.php/Admin/Index/left" name="left" noresize="noresize" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" />
        <!--主体右部分-->
        <?php if($_SESSION['ID'] == '1'): ?><frame src="/ThinkPHP/yanJing/index.php/Admin/Member/mem_list.html" name="main" frameborder="0" scrolling="auto" marginwidth="0" marginheight="0" /><?php endif; ?>
        <?php if($_SESSION['ID'] != '1'): ?><frame src="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_sort"" name="main" frameborder="0" scrolling="auto" marginwidth="0" marginheight="0" /><?php endif; ?>
</frameset>
</html>