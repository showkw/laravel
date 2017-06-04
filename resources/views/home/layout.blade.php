<?php
header('Access-Control-Allow-Origin:http://cdn.shop.com');
/**
 * File Name: layout.blade.php
 * Description: 布局主文件
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/4
 * Time: 18:38
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')"/>
        <meta name="keywords" content="@yield('keywords')"/>
        @section('staticFile')

            <link rel="stylesheet" href="{{ URL::asset('/css/font-awesome.min.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('/plugin/layui/css/layui.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('/css/home/topNav.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('/css/home/base.css') }}">

        @show
    </head>
    <body>
    @yield('content')
    @include('home.public.footer')
    </body>
</html>


