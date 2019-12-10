<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit','store','create','update','delete');
        $this->middleware('role:Admin')->only('edit','store','create','update','delete','show');
    }

    public function create()
    {
        return view('contact.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title' =>' required',
            'phone' =>' required',
            'email' => ['required','email'],
            'description' => ['required','max:9500'],
        ]);
        auth()->user()->contact()->create($data);
        return  redirect('/contact');
    }

    public function index()
    {
//        $article_number = DB::table('contacts')->count();
        $contact = DB::table('contacts')->get();
        return view('contact.index', compact('contact'));
    }

    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }
}
