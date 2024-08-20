<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class insertArticle extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required'
        ]);

        $article = new Article([
            'content' => $request->get('content')
        ]);
        $article->save();

        return redirect('/articles');
    }
}