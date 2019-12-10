@include('layouts.header')
<link href="/index/css/base.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" rev="stylesheet" href="/index/css/mobile.css" type="text/css" media="screen">
<link href="/index/css/user.css" rel="stylesheet" type="text/css" />
    <!------------main---------------->
    <div class="main">
        <div class="login-left">
            <div class="title"><h2>会员登录<span>LOGIN</span></h2></div>
            <div class="form-group">
            <form action="doLogin" method="post">
                <div class="input-k">
                    <span>帐号：</span><input type="text" name="username" />
                </div>
                <div class="input-k">
                    <span>密码：</span><input type="password" name="password" /><p class="prompt">请输入您的登录密码！</p>
                </div>
                <div class="input-k">
                    <span></span><input type='checkbox' name='checkbox' value=1 class="checkbox"><span class="jzzt">记住登录状态&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">忘记密码？</a></span>
                </div>
                <div class="input-k">
                    <span></span><input type="submit" style="background:#599" value="立即登陆">
                   <!--  <button type="button" onclick="javascript:window.location.href='user/personal.html'">立即登录</button> -->
                </div>
            </div>
            </form>
            <div class="fast-login">
                <p>使用合作网站帐号登录：</p>
                <div class="fast-logo">
                    <a href="#"><img src="/index/images/fast-qq.jpg" /><span>QQ</span></a>
                    <a href="#"><img src="/index/images/fast-xl.jpg" /><span>新浪微博</span></a>
                    <a href="#"><img src="/index/images/fast-d.jpg" /><span>豆瓣</span></a>
                    <a href="#"><img src="/index/images/fast-zfb.jpg" /><span>支付宝</span></a>
                    <a href="#"><img src="/index/images/fast-rr.jpg" /><span>人人网</span></a>
                </div>
            </div>
        </div>
        
        <div class="login-right">
            <p>还不是我们的会员？</p>
            <a href="/home/add">十秒快速注册</a>
        </div>
        
    </div>
    
    


</body>
<script type="text/javascript" src="/index/js/jquery.min.js"></script>
<script type="text/javascript" src="/index/js/Public.js"></script>
<SCRIPT type="text/javascript" src="/index/js/baidu.js"></SCRIPT>

<script type="text/javascript">
$(function(){
    /*------------------------------排列互选框-----------------------------------*/  
    $(".box-hd .more a").click(function(){
        if($(this).find("i").attr("class")=="icon-check"){
            $(this).find("i").attr("class","icon-check-active");
        }
        else{
            $(this).find("i").attr("class","icon-check");
        }
    })
})

</script>
</html>
@include('layouts.footer')
