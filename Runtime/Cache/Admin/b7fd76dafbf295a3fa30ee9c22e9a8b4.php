<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>skin.css" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
    <body>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!-- 头部开始 -->
            <tr>
                <td width="17" valign="top" background="<?php echo (IMG_URL); ?>mail_left_bg.gif">
                    <img src="<?php echo (IMG_URL); ?>left_top_right.gif" width="17" height="29" />
                </td>
                <td valign="top" background="<?php echo (IMG_URL); ?>content_bg.gif">
                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="<?php echo (IMG_URL); ?>content_bg.gif">
                        <tr><td height="31"><div class="title">添加商品</div></td></tr>
                    </table>
                </td>
                <td width="16" valign="top" background="<?php echo (IMG_URL); ?>mail_right_bg.gif"><img src="<?php echo (IMG_URL); ?>nav_right_bg.gif" width="16" height="29" /></td>
            </tr>
            <!-- 中间部分开始 -->
            <tr>
                <!--第一行左边框-->
                <td valign="middle" background="<?php echo (IMG_URL); ?>mail_left_bg.gif">&nbsp;</td>
                <!--第一行中间内容-->
                <td valign="top" bgcolor="#F7F8F9">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <!-- 空白行-->
                        <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        
                        <!-- 一条线 -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <!-- 添加会员开始 -->
                       <tr style="height:360px">
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2" >
                                            <form action="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_add" method="post" enctype="multipart/form-data">
                                                <table width="1100px" class="cont" style="position: absolute;top:90px;left:40px">
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="10%">产品名称：</td>
                                                        <td width="20%"><input class="text" type="text" name="product" value="" /></td>
                                                        <td width="20%">&nbsp;</td>
                                                        <td width="10%">类别：</td>
                                                        <td width="20%">
                                                            <select class="sele" name="category">
                                                                <option value="近视镜片">近视镜片</option>
                                                                <option value="太阳镜">太阳镜</option>
                                                                <option value="隐形眼镜">隐形眼镜</option>
                                                                <option value="老花镜">老花镜</option>
                                                                <option value="隐形眼镜护理液">隐形眼镜护理液</option>
                                                                <option value="眼镜架">眼镜架</option>
                                                            </select>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td>所属品牌：</td>
                                                        <td><input class="text" type="text" name="brand" value="" /></td>
                                                        <td>&nbsp;</td>
                                                        <td>价格：</td>
                                                        <td><input class="text" type="text" name="Price" value="" /></td>
                                                        <td>&nbsp;</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                   <tr height="185px">
                                                        <td width="2%">&nbsp;</td>
                                                        <td>产品图片：</td>
                                                        <td colspan="2">
                                                        <div class="fi" ></div>
                                                        <input class="fi1" type="file" name="pe_img" />
                                                        <span class="fi2">选择图片</span>
                                                        </td>
                                                        
                                                        <td colspan="4">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                    
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td>描述：</td>
                                                        <td colspan="2"><textarea name="describe" value="" style="width:380px"></textarea></td>
                                                        <!-- <td>厂商微信号</td>
                                                        <td><input class="text" type="text" name="weixin" value="" /></td> -->
                                                        <td colspan="4">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>密码：</td>
                                                        <td><input class="text" type="password" name="password" placeholder="输入登录密码" value="" />
                                                        <td ><input class="btn" id='su' type="submit" value="添加" /></td>

                                                        <td colspan="4">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%">&nbsp;</td>
                        </tr>
                        <!-- 添加栏目结束 -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="51%" class="left_txt">
                                <img src="<?php echo (IMG_URL); ?>icon_mail.gif" width="16" height="11"> 客户服务邮箱：rainman@foxmail.com<br />
                                <img src="<?php echo (IMG_URL); ?>icon_phone.gif" width="17" height="14"> 官方网站：<a href="http://www.mycodes.net/" target="_blank">源码之家</a>
                            </td>
                            <td>&nbsp;</td><td>&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td background="<?php echo (IMG_URL); ?>mail_right_bg.gif">&nbsp;</td>
            </tr>
            <!-- 底部部分 -->
            <tr>
                <td valign="bottom" background="<?php echo (IMG_URL); ?>mail_left_bg.gif">
                    <img src="<?php echo (IMG_URL); ?>buttom_left.gif" width="17" height="17" />
                </td>
                <td background="<?php echo (IMG_URL); ?>buttom_bgs.gif">
                    <img src="<?php echo (IMG_URL); ?>buttom_bgs.gif" width="17" height="17">
                </td>
                <td valign="bottom" background="<?php echo (IMG_URL); ?>mail_right_bg.gif">
                    <img src="<?php echo (IMG_URL); ?>buttom_right.gif" width="16" height="17" />
                </td>           
            </tr>
        </table>
    </body>
    <script type="text/javascript">
        $(function(){
            $("#su").click(function(){
                
                 var password=document.getElementsByName("password")[0].value;
                 var product=document.getElementsByName("product")[0].value;
                 var category=document.getElementsByName("category")[0].value;
                 var brand=document.getElementsByName("brand")[0].value;
                 var Price=document.getElementsByName("Price")[0].value;
                 var pe_img=document.getElementsByName('pe_img')[0].value;
                 if(password==""||product==""||category==""||Price==""||pe_img==""){
                    
                    return false;
                 }
            });
            
            var fileArr = [];
            var selFileIpt = $('input[type=file]'),
            selFileBtn = selFileIpt.next();

            selFileBtn.on('click', function () {  
                $(this).prev().click();
            });

            

            //绑定事件
            selFileIpt.on('change', selFile);

            //选择文件
            function selFile (e) {
                e = e || window.event;
                //阻止浏览器的默认行为
                if(e.preventDefault){  
                    e.preventDefault(); 
                }else{
                    e.returnValue = false;
                }
                var files = this.files || event.dataTransfer.files,
                src = 'img/',
                imgSrc;
                Array.prototype.forEach.call(files, function (item, i) {

                    //防止重复选择相同的文件
                    var notExist = fileArr.some(function (existFile) {
                        return existFile.name === item.name;
                    })
                    if(notExist && fileArr.length != 0){
                        return !notExist;
                    }

                    fileArr.push(item);
                    var fr = new FileReader();
                    fr.readAsDataURL(item);
                    fr.onload = function () {

                        //判断展示的文件类型
                        if(item.type.indexOf("image") > -1){
                            imgSrc = fr.result;
                             //展示选择的文件
                            var dom='<img src="'+ imgSrc +'" style="width:90%;height:90%;margin: 5% 5%;"/>';  
                            $(".fi").html(dom);
                            this.value ='1';
                        }else{
                            alert("选择类型必需为图片");
                            this.value ='';
                        }

                       
                        
                    }
                });

                
                  
            }
            
        })
    </script>
</html>