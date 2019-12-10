@include('layout.header')
        <!DOCTYPE html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.1</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>
    <script type="text/javascript" src="./js/cookie.js"></script>
</head>

<body>
<div class="x-body">
    <table class="layui-table">
        <thead>
        <th>ID</th>
        <th>仓库名称</th>
        <th>仓库编码</th>
        <th>仓库是否启用</th>
        <th>仓库所在地区</th>
        <th>仓库所服务区区</th>
        <th>操作</th>
        </thead>
        @foreach($data as $user)
            @continue($user->type == 1)
            <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->coding}}</td>
                <td>{{$user->static}}</td>
                <td>{{$user->place}}</td>
                <td>{{$user->servicearea}}</td>
                <td>
                    <a href="unset?id={{$user->id}}" class="layui-btn layui-btn-normal">销毁仓库</a>
                    <a href="redact?id={{$user->id}}" class="layui-btn layui-btn-warm">编辑仓库</a>
                </td>
            </tr>
            </tbody>
            @break($user->number == 5)
        @endforeach
    </table>
</div>
</body>
</html>
@include('layout.footer')