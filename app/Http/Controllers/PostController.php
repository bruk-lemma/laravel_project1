<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Requests\StorePost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // dd(\App\Models\BlogPost::all());

       return view('posts.index',['posts' => BlogPost::all()]);
    }


    public function show(Request $request, $id)
    {
        //
        //dd(\App\Models\BlogPost::all());
        //$request->session()->reflash();
        return view('posts.show',['posts' =>BlogPost::findOrFail($id)]);
    }

    public function create(){
        return view('posts.create');

    }

    public function store(StorePost $request){

       $validateData=$request->validated();
          dd($validateData);
        $blogpost=new BlogPost();
        $blogpost->title=$request->input('title');
        $blogpost->content=$request->input('content');
        $blogpost->save();
       // dd($title,$content);

       $request->session()->flash('status','Blog post was created..!');
       return redirect()->route('posts.show' ,['post'=>$blogpost->id]);

    }

}
