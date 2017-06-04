<?php
/**
 * File Name: register.blade.php
 * Description: 会员注册模板文件
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/4
 * Time: 19:02
 */
?>
@extends('home.layout')
@section('title', '用户注册-爱淘宝-淘宝网购物分享平台')
@section('content')
    @include('home.public.headNav')
    <!--内容开始-->
    <form method="post" action="/auth/register">
        {!! csrf_field() !!}
        <div>
            用户名
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            密码
            <input type="password" name="password">
        </div>

        <div>
            确认密码
            <input type="password" name="password_confirmation">
        </div>

        <div>
            <button type="submit">注册</button>
        </div>
    </form>
    <!--内容结束-->
@endsection
