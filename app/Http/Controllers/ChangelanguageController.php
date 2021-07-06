<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ChangelanguageController extends Controller
{
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);
        return redirect()->back();
    }
}
