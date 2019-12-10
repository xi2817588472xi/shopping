@include('layout.header')
<form class="layui-form" action="create" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">仓库名称</label>
        <div class="layui-input-block">
            <input type="text" name="username" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">仓库编码</label>
        <div class="layui-input-block">
            <input type="text" name="coding" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">仓库是否启用</label>
        <div class="layui-input-block">
            <input type="radio" name="static" value="启用" title="启用">
            <input type="radio" name="static" value="不启用" title="不启用" checked>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">仓库所在地区</label>
        <div class="layui-input-block">
            <input type="text" name="place" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">仓库所在服务区</label>
        <div class="layui-input-block">
            <input type="text" name="servicearea" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn layui-btn-radius layui-btn-warm" lay-submit lay-filter="formDemo">添加仓库</button>
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