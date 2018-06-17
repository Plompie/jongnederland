<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        $posts = Post::all();
        return view('blog.nieuws', ['posts' => $posts]);
    }
    public function activiteiten()
    {
        return view('activiteiten');
    }
    public function informatie()
    {
        return view('informatie');
    }
    public function overons()
    {
        return view('overons');
    }
    public function trainingen()
    {
        return view('trainingen');
    }
    public function webshop()
    {
        return view('webshop');
    }
}
