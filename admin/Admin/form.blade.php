@include('layout.header')


<div style="padding: 15px;">
    <form class="layui-form layui-form-pane1" action="insert" lay-filter="first" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label">账号</label>
            <div class="layui-input-block">
                <input type="text" name="name" style="width:200px;" lay-verify="required|title" lay-reqText="身份不能为空" required placeholder="请输入账号" autocomplete="off" class="layui-input" >
            </div>
        </div>
         <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                <input type="password" name="pwd" style="width:200px;" lay-verify="required|title" lay-reqText="身份不能为空" required placeholder="请输入密码" autocomplete="off" class="layui-input" >
            </div>
        </div>

        <div class="layui-form-item">
    <label class="layui-form-label">角色</label>
    <div class="layui-input-inline">
      <select name="r_id" lay-filter="interest-search" lay-search>
        <?php foreach ($data as $key => $value): ?>
          <option value="<?=$value['id']?>"><?=$value['role']?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
    
       
        <div class="layui-form-item">
            <div class="layui-input-block">
            	<input type="submit" class="layui-btn" value="立即提交">
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

    <br><br><br>


    <script src="/admin/src/layui.js"></script>
    <!-- <script src="../build/lay/dest/layui.all.js"></script> -->
    <script>
    $('#quan').click(function(){
    	$('#ads').html('11(商品分类管理),12(订单管理),13(商品管理),14(商品属性管理),15(客服中心),16(仓库管理),17(活动管理)');
    })

    form.on('checkbox', function(data){
    console.log(this.checked, data.elem.checked);
  });
    </script>

    <script>

layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;

  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题也太短了吧';
      }
    }
    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
    ,money: [
      /^\d+\.\b\d{2}\b$/
      ,'金额必须为小数保留两位'
    ]
  });
  
  //日期
  laydate.render({
    elem: '#date'
  });
  
  //初始赋值
 
  
  //事件监听
  
  
});

</script>



    



  







@include('layout.footer')