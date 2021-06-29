<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Topics;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return View('functions.home');
    }

    public function topic(){
        $topics = Topics::latest()->paginate(config('app.paginate'));

        return View('functions.topic', compact(('topics')));
    }

}
