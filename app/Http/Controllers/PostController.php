<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tecnologia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Devuelve un listado de post
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Devuelve la vista de creacion de post y le envia las tecnologias
         $tecnologias = Tecnologia::all();
        return view('posts.create', compact('tecnologias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guarda el post
        $post = new Post();
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->tecnologias_id = $request->tecnologia_id;
        $post->user_id = auth()->id();
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //Aquí muestra el post por completo para ello te lleva a la vista show
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {   
        $tecnologias = Tecnologia::all();
        //Aqui te lleva al formulario de edicion enviandole el post  y las tecnologias para el select
        return view('posts.edit', compact('post', 'tecnologias'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //Aquí carga la edición del post
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->tecnologias_id = $request->tecnologia_id;
        $post->save();
         return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //Aquí borra el post
        $post->delete();
         return redirect()->route('post.index');
    }
}
