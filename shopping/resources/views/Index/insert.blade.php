@include('layout.header')
<form class="layui-form" method="post" action="add_do">
    <div class="layui-form-item">
        <label class="layui-form-label">属性名称</label>
        <div class="layui-input-block">
            <input type="text" name="username" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">属性分类</label>
        <div class="layui-input-block">
            <select name="classify" lay-verify="required">
                @foreach ($data as $k => $v)
                    <option value="{{$v['name']}}">{{$v['name']}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">是否展示属性</label>
        <div class="layui-input-block">
            <input type="radio" name="static" value="是" title="是">
            <input type="radio" name="static" value="否" title="否" checked>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn">立即提交</button>
        </div>
    </div>
</form>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;
    });
</script>
@include('layout.footer')