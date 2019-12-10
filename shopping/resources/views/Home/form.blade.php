@include('layouts.header')
<link href="/index/css/base.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" rev="stylesheet" href="/index/css/mobile.css" type="text/css" media="screen">
<link href="/index/css/user.css" rel="stylesheet" type="text/css" />
    <!------------main---------------->
    <div class="main">
    <form action="insert" method="post">
        <div class="login-left">
            <div class="title"><h2>注册会员<span>REGISTRATION</span></h2></div>
            <div class="form-group">
                <div class="input-k">
                    <span>帐号：</span><input type="text" name="username" /><p class="prompt">请填写常用的邮箱/手机号码！</p>
                </div>
                <div class="input-k">
                    <span>密码：</span><input type="password" name="password" id="password" />
                </div>
                <div class="input-k">
                    <span>确认密码：</span><input type="password" id="pwd" /><span id="s_pwd"></span>
                </div>
                
                <!-- <div class="input-k">
                    <span></span><input type='checkbox' name='checkbox' value=1 class="checkbox"><span class="jzzt">我已阅读并同意遵守&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">有货服务条款</a></span>
                </div> -->
                <div class="input-k">
                    <span></span><input type="submit" style="background:#599" value="注册">
                </div>
            </div>
        </div>
        
        <div class="login-right">
            <p>已经是我们的会员？</p>
            <a href="/home/login" style="padding-left:40px;">立即登录</a>
        </div>
        </form>
    </div>
    
    <!---foot---->
   @include('layouts.footer')



</body>
<script type="text/javascript" src="/index/js/jquery.min.js"></script>
<SCRIPT type="text/javascript" src="/index/js/baidu.js"></SCRIPT>
</html>
<script>
    $('#pwd').blur(function(){
        var password = $('#password').val();
        var pwd = $('#pwd').val();
        if(password!=pwd){
            $('#s_pwd').html('密码不一致');
        }else{
            return true;
        }
        // alert(password);
    })
</script>
