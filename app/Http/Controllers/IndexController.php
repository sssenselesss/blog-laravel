<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->get('search');

        $articles = Article::query()
            ->where('status', '=', 'published');

        if ($searchQuery) {
            $articles = $articles->where('title', 'LIKE', '%' . $searchQuery . '%');
        }

        $articles = $articles->orderByDesc('created_at')->paginate(5);

        return view('index', compact('articles'));
    }

    public function add()
    {
        $categories = Category::all();

        return view('add', [
            'categories' => $categories
        ]);
    }

    public function update(Article $article)
    {
        $categories = Category::all();

        return view('update', [
            'categories' => $categories,
            'article' => $article
        ]);
    }

    public function blocked()
    {
        return view('blocked');
    }

    public function user(User $user)
    {
        return view('user', compact('user'));
    }

    public function single()
    {
        return view('single');
    }
}
