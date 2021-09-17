<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publication;
use App\Models\contact;
use App\Models\event;
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

        return view('home');
    }

    public function homepage()
    {
        return view('welcome');
    }

    public function newPub()
    {
        return view('newPub');
    }

    public function savenewpost(Request $request)
    {
        $datas = new publication();
        $datas -> title = $request['title'];
        $datas -> content = $request['description'];
        $datas -> image = $request['image'];
        $datas -> image2 = $request['image2'];
        $datas -> link = $request['link'];
        $datas -> link2 = $request['link2'];
        $datas -> created_by = auth()->user()->name;
        $datas -> save();

        return redirect()->back()->with(['message' => 'Post Published Successfully!']);
    }
}
