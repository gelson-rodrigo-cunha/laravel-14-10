<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ExibeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    /*    $posts = Post::all();
         $total = Post::all()->count();
        return view('layouts.show-posts', compact('posts', 'total'));
       
     */
     //Retorno para o aplicativo
       return Post::all();
    //   tem que comentar o use App\noticias
        
    }

   
}
