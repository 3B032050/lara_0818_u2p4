<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends Controller
{
    public function post()
    {
        return view('post');
    }
    public function index()
    {
        return view('index');
    }
    public function show()
    {
        return view('show');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }


}
