<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $postRepository;

    protected $nbrPerPage = 4;

    public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('admin', ['only' => 'destroy']);

        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getPaginate($this->nbrPerPage);
        $links = $posts->setPath('')->render();

        $posts = \App\Post::withTrashed()->oldest('type_post')->paginate(5);
        return view('index', compact('posts','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $Request)
    {
        $inputs = array_merge($Request->all(), ['user_id' => $Request->user()->id]);

        $this->postRepository->store($inputs);




        return redirect()->route('posts.index')->with('info','la post été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);

        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $postRequest, Post $post)
    {
        $post->update($postRequest->all());
        return redirect()->route('posts.index')->with('info', 'La post a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('info', 'la post a bien été mis dans la corbeille.');
    }
    public function forceDestroy($id)
    {
        Post::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'La post a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Post::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'La post a bien été restauré.');
}}
