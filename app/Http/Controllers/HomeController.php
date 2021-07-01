<?php

namespace App\Http\Controllers;
use App\Model\Topics;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.home');
    }

    public function topic(){
        $topics = Topics::latest()->paginate(config('app.paginate'));

        return View('users.topic', compact('topics'));
    }
}
