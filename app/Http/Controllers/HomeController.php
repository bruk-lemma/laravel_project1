<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function blogpost($id,$welcome=1){
        $pages=[
            1=>[
                'title'=>'hello from page one...!'
            ],
            2=>[
                'title'=>'hello from page two....! '
            ],
        ];

        $welcomes=[1=>' <b>welcome...uno</b>',2=>'bon voyage...dwe'];
        return
        view(
        'blog-post',['data'=>$pages[$id],
        'welcome'=>$welcomes[$welcome]]);
    }
}
