<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::all();
         $total = Post::all()->count();
        return view('layouts.show-posts', compact('posts', 'total'));
       
     
     //Retorno para o aplicativo
     //  return \App\Post::all();
    //   tem que comentar o use App\noticias
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view ('layouts.tema');
         return view('layouts.create-post');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request) {
   
        $dados = $request->all();
        Post::create($dados);
        return redirect()->route('posts.index')->with('message', 'Post criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::findOrFail($id);
		//return \App\Post::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function edit($id) {
        $posts = Post::findOrFail($id);
        return view('layouts.edit-post', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function put(Request $request, $id)
    {
        $dados = $request->all();
        $id = Post::findOrFail($id);
        $id->update($dados);
        return back()->with(["message_edit" => 'Post editado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id) {
        $noticias = Post::findOrFail($id);
        $noticias ->delete();
        return redirect()->route('posts.index')->with('message', 'Post excluído com sucesso!');
    }
}
