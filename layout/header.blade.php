<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="stylesheet" href="/admin/src/css/layui.css">
</head>
<script src="/admin/src/layui.js"></script>
<script src="https://www.jq22.com/jquery/jquery-3.3.1.js"></script>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">layui 后台布局</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">首页</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">菜单列表</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">菜单列表</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/nav_index">菜单列表</a></dd>
                       

                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">管理员角色管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/usr_index">管理员角色列表</a></dd>
                        
                    </dl>
                </li>

                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">管理员管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/wen_index">管理员列表</a></dd>
                       
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">商品分类管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/wei_index">商品分类列表</a></dd>
                        

                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">订单管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/guang_index">订单列表</a></dd>

                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">商品管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/type_index">商品展示</a></dd>

                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">商品属性管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/img_index">商品属性列表</a></dd>
                        
                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">客服中心</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/dao_index">商品评论审核</a></dd>
                        <dd><a href="http://123.206.24.151/ba/dao_form">用户意见反馈列表</a></dd>

                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a href="javascript:;">仓库管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/wang_index">仓库列表</a></dd>

                    </dl>
                </li>

                 <li class="layui-nav-item">
                    <a href="javascript:;">活动管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="http://123.206.24.151/ba/wang_index">仓库列表</a></dd>

                    </dl>
                </li>

               
            </ul>
        </div>
    </div>

    <div class="layui-body">