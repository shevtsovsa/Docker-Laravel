<?php

namespace App\Http\Controllers\about;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * GET
     */
    public function getAboutPage()
    {
        return view('about.page');
    }
}
