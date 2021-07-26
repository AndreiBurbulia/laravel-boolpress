<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->get();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $categories)
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required | max:50',  //max:1 dice massimo 1kilobyte
            'title' => 'required | max:200 | min:5',
            'content' => 'required',
            'create_date' => 'required',
            'author' => 'required | min:3',
            'category_id' => 'required | exists:categories,id',
            'public' => 'required | boolean'
        ]);
        
        $file_path = Storage::put('posts_images', $validated['image']);
        $validated['image'] = $file_path;
        Article::create($validated);

        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'image' => 'nullable | max:50',
            'title' => 'required | max:200 | min:5',
            'content' => 'required',
            'create_date' => 'required',
            'author' => 'required | min:3',
            'category_id' => 'required | exists:categories,id',
            'public' => 'required | boolean'
        ]);

       /**/
       if (array_key_exists('image', $validated)) {
           $file_path = Storage::put('posts_images', $validated['image']);
           $validated['image'] = $file_path;
           Storage::delete($article->image);
    }



    $article->update($validated);

    return redirect()->route('admin.article.show', $article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.dashboard');
    }
}