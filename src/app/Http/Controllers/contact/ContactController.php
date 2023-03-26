<?php

namespace App\Http\Controllers\contact;

class ContactController extends \App\Http\Controllers\Controller
{
    /**
     * GET
     */
    public function getContactPage()
    {
        return view('contact.page');
    }
}
