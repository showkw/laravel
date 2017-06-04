<?php
/**
 * File Name: login.blade.php
 * Description: 会员登陆模板文件
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/4
 * Time: 19:02
 */
?>
@extends('home.layout')
@section('title', '用户登陆-爱淘宝-淘宝网购物分享平台')
@section('content')
    @include('home.public.headNav')
    <!--内容开始-->
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            密码
            <input type="password" name="password" id="password">
        </div>

        <div>
            <input type="checkbox" name="remember"> 记住我
        </div>

        <div>
            <button type="submit">登录</button>
        </div>
    </form>
    <!--内容结束-->
@endsection
