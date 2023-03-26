<?php

namespace App\Http\Controllers\arm;

class MainController extends \App\Http\Controllers\Controller
{
    /**
     * GET
     */
    public function getMainPage()
    {
        return view('arm.app');
    }

    /**
     * GET detail
     */
    public function getDetailPage()
    {
        return view('arm.app');
    }
}
