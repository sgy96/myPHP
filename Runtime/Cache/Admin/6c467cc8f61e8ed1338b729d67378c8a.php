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
                        <tr><td height="31"><div class="title">商品详情</div></td></tr>
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
                                            <form action="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_details" method="post" enctype="multipart/form-data">
                                                <table width="1100px" class="cont" style="position: absolute;top:90px;left:40px">
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="10%">产品名称：</td>
                                                        <td width="20%"><input class="text" type="text" name="product" value="<?php echo ($res["product"]); ?>" /></td>
                                                        <td width="20%">&nbsp;</td>
                                                        <td width="10%">类别：</td>
                                                        <td width="20%"><input class="text" type="text" name="category" value="<?php echo ($res["category"]); ?>" readonly="true"/></td>
                                                        <td>&nbsp;</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td>所属品牌：</td>
                                                        <td><input class="text" type="text" name="brand" value="<?php echo ($res["brand"]); ?>" /></td>
                                                        <td>&nbsp;</td>
                                                        <td>价格：</td>
                                                        <td><input class="text" type="text" name="Price" value="<?php echo ($res["Price"]); ?>" /></td>
                                                        <td>&nbsp;</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                   <tr height="185px">
                                                        <td width="2%">&nbsp;</td>
                                                        <td>产品图片：</td>
                                                        <td colspan="2">
                                                        <div class="fi" >
                                                            <img src="<?php echo (UP_URL); echo ($res["pe_img"]); ?>" style="width:90%;height:90%;margin: 5% 5%;"/>
                                                        </div>
                                                        <input type="hidden"  name='ID' value='<?php echo ($res["ID"]); ?>'/>
                                                        <input type="hidden" id='ppppp' name='pi' value='0'/>
                                                        <input class="fi1" type="file" name="pe_img"  />
                                                        <span class="fi2">选择图片</span>
                                                        </td>
                                                        
                                                        <td colspan="4">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                    
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td>描述：</td>
                                                        <td colspan="2"><textarea name="describe" value="" style="width:380px"><?php echo ($res["describe"]); ?></textarea></td>
                                                        <td>厂商名称</td>
                                                        <td><input class="text" type="text"  value="<?php echo ($res["Maker"]); ?>"  readonly="true"/></td>
                                                        <td colspan="2">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>密码：</td>
                                                        <td><input class="text" type="password" name="password" placeholder="输入登录密码" value="" />
                                                        <td ><input class="btn" id='su' type="submit" name='1' value="修改" /></td>
                                                        <td ><input class="btn" id='su' type="submit" name='2' value="删除" /></td>

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
                 
                 if(password==""||product==""||category==""||Price==""){
                    
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
                            $('#ppppp')[0].value='1';
                        }else{
                            alert("选择类型必需为图片");
                            this.value ='';
                            $('#ppppp')[0].value='0';
                        }

                       
                        
                    }
                });

                
                  
            }
            
        })
    </script>
</html>