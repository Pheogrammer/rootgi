<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publication;
use App\Models\contact;
use App\Models\event;
use Illuminate\Support\Facades\File;
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

        $publication = publication::orderBy('id','Desc')->orderBy('id','desc')->limit(3)->get();
        $event = event::orderBy('id','Desc')->first();
        return view('home',['pub'=>$publication,'eve'=>$event]);
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

        if($request['image']!='')
        {
            $path = public_path('posts/');

            if(!File::isDirectory($path))
            {
              File::makeDirectory($path,$mode = 0777, true, true);
            }

            if($file = $request->file('image'))
            {
                $filename = $file->getClientOriginalName().'-'.time().'-'.auth()->user()->id.'.'.$file->getClientOriginalExtension();
                $targetpath = $path;

                if($file->move($targetpath, $filename))
                {

              $datas -> image = $filename;


                }
                else
                {
                  return redirect()->back()->withErrors(['message'=>'image1 slip Not uploaded, try again!']);

                }
              }else
              {
                return redirect()->back()->withErrors(['message'=>'image1 slip Not uploaded, try again!']);

              }
        }
        if($request['image1']!='')
        {
            $path = public_path('posts/');

            if(!File::isDirectory($path))
            {
              File::makeDirectory($path,$mode = 0777, true, true);
            }

            if($file = $request->file('image1'))
            {
                $filename2 = $file->getClientOriginalName().'-'.time().'-'.auth()->user()->id.'.'.$file->getClientOriginalExtension();
                $targetpath = $path;

                if($file->move($targetpath, $filename2))
                {

              $datas -> image2 = $filename2;


                }
                else
                {
                  return redirect()->back()->withErrors(['message'=>'image2 slip Not uploaded, try again!']);

                }
              }else
              {
                return redirect()->back()->withErrors(['message'=>'image2 slip Not uploaded, try again!']);

              }
        }

        $datas -> title = $request['title'];
        $datas -> content = $request['description'];

        if($request['link']!='')
        {
            $datas -> link = $request['link'];

        }
        if($request['link']!='')
        {
            $datas -> link2 = $request['link2'];

        }
        $datas -> created_by = auth()->user()->name;
        $datas -> save();

        return redirect()->route('home')->with(['message' => 'Post Published Successfully!']);
    }

    public function editPub($id)
    {
        $data = publication::where('id',$id)->get();
        return view('editPub',['pub'=>$data]);
    }

    public function readpub($id)
    {
        $data = publication::where('id',$id)->first();
        return view('readpub',['pub'=>$data]);
    }

    public function allposts()
    {
        $publication = publication::orderBy('id','Desc')->orderBy('id','desc')->get();
        return view('allposts',['pub'=>$publication]);
    }
}
