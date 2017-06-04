<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * File Name: HomeController.php
 * Description:
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/4
 * Time: 23:14
 */
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view( 'home/index' );
    }

}