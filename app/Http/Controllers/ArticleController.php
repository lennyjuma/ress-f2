<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit','store','create','update','delete');
        $this->middleware('role:Admin')->only('edit','store','create','update','delete');
    }
    public function index()
    {
//        $role = Role::create(['name'=>'Admin']);
////        $permission = Permission::create(['name'=>'crud']);
////        $permission->assignRole($role);
//        auth()->user()->assignRole('Admin');
        $article_number = DB::table('articles')->count();
        $article = DB::table('articles')->get();
        return view('article.index', compact('article', 'article_number'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' =>' required',
            'description' => ['required'],
        ]);
        auth()->user()->article()->create($data);
        return  redirect('/article');
    }
    public function show(Article $article)
    {
//        dd($article);
        return view('article.show', compact('article'));
    }public function share(Article $article)
    {
//        dd($article);
        return view('article.share', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Request $request,Article $article)
    {
        $request->validate([
            'title' => 'required',
            'description' => ['required','max:9500'],
        ]);
        $article->update($request->all());

        return redirect()->route('article.index')
            ;

    }
}
