@include('layout.header')


<div style="padding: 15px;">
    <form class="layui-form layui-form-pane1" action="doAdd" lay-filter="first" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label">身份</label>
            <div class="layui-input-block">
                <input type="text" name="role" style="width:200px;" lay-verify="required|title" lay-reqText="身份不能为空" required placeholder="请输入身份" autocomplete="off" class="layui-input" >
            </div>
        </div>
     <input type="text" value="查看权限" style="width:100px;" class="layui-btn" id="quan"><span id="ads"></span>
       

        <div class="layui-form-item" pane>
    <label class="layui-form-label">权限</label>
    <div class="layui-input-block">
    <!--   <input type="checkbox" name="role" title="商品分类管理" value="11">
      <input type="checkbox" name="role" title="商品分类管理" value="12">
	  <input type="checkbox" name="role" title="订单管理" value="13">
	  <input type="checkbox" name="role" title="商品管理" value="14">
	  <input type="checkbox" name="role" title="商品属性管理" value="15">
	  <input type="checkbox" name="role" title="客服中心管理" value="16">
	  <input type="checkbox" name="role" title="仓库管理" value="17"> -->
    
    </div>
    @foreach ($data as $key => $value)
      <input type="checkbox" name="q_id[]" title="{{$value['q_name']}}" value="{{$value['id']}}">
    @endforeach
  
       
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