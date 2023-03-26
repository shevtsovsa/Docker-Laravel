<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * GET
     */
    public function getServicePage()
    {
        return view('service.page');
    }
}
