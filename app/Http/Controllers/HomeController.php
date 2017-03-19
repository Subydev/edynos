<?php

namespace App\Http\Controllers;

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
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
       return view('home/index');
   }

    public function upload()
    {
        return view('upload/index');
    }

    public function activity()
    {
        return view('activity/index');
    }

    public function table()
    {
        return view('table/index');
    }

    public function forum()
    {
        return view('forum/index');
    }

    public function faq()
    {
        return view('faq/index');
    }

    public function profile()
    {
        return view('profile/index');
    }
}
