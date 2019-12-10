@include('layout.header')
<form class="layui-form" action="">
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">满减活动</label>
        <div class="layui-input-block">
            <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">赠送优惠券</label>
        <div class="layui-input-block">
            <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">满几送几</label>
        <div class="layui-input-block">
            <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
        </div>
    </div>
    {{--<div class="layui-form-item">--}}
        {{--<div class="layui-input-block">--}}
            {{--<button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>--}}
            {{--<button type="reset" class="layui-btn layui-btn-primary">重置</button>--}}
        {{--</div>--}}
    {{--</div>--}}
</form>

<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;
    });
</script>
@include('layout.footer')