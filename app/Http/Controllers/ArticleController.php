<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{
    public function index()
    {
        // request()->file('image');
        return view("articles.blog", [
            'articles' => Article::all()
        ]);   
    }

    public function create()
    {
        return view('articles.createArticle');

    }

    public function store(Request $request)
    {
        $article = new Article;

            $ImagePath =  request('image_link')->store('public');
            $article->title = request('title');
            $article->body = request('body');
            $article->editor_name = request('editor_name');
            $article->image_link = str_replace('public','storage',$ImagePath);
            $article-> save();

            return redirect('blog');
    }

    public function show($a_id)
    {
        return view("articles.single_article")->with( [
            'article'=>Article::find($a_id),
            'otherArticles'=> Article::take(6)->get()
            ] );
    } 

     public function edit($id)
    {
        return view("articles.edit", [
            'article' => Article::find($id)
        ]);
   }

     public function update(Request $request, $a_id)
     {
         //
        $article = Article::find($a_id);

        if (request('image_link'))
         {
            $ImagePath = request('image_link')->store('public');
            $article->image_link = str_replace('public', 'storage', $ImagePath);
        }
        $article->title = request('title');
        $article->body = request('body');
        $article->editor_name = request('editor_name');
        $article->save();
        return redirect('blog');
    }

      public function destroy($a_id)
  { 
      $article = Article::find($a_id)->delete();
      return redirect ('blog');    
    }
}
