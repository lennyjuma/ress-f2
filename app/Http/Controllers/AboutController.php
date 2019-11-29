<?php

namespace App\Http\Controllers;

use App\About;
use App\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit','store','create','update','delete');
        $this->middleware('role:Admin')->only('edit','store','create','update','delete');

    }
    public function index()
    {
        $about_number = DB::table('abouts')->count();
        $about = DB::table('abouts')->get();
        return view('about.index', compact('about', 'about_number'));
    }

    public function create()
    {
        return view('about.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' =>' required',
            'description' => ['required','max:9500'],
        ]);
        auth()->user()->about()->create($data);
        return  redirect('/about');
    }
    public function show(About $about)
    {
        dd($about);
        return view('about.show', compact('about'));
    }

    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    public function update(Request $request,About $about)
    {
        $request->validate([
            'title' => 'required',
            'description' => ['required','max:9500'],
        ]);
        $about->update($request->all());

        return redirect()->route('about.index')
            ;

    }
}
