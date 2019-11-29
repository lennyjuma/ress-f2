<?php

namespace App\Http\Controllers;

use App\About;
use App\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit','store','create','update','delete');
        $this->middleware('role:Admin')->only('edit','store','create','update','delete');

    }
    public function index()
    {
//        dd(About::chunk(2));
        $member_number = DB::table('members')->count();
        $members = DB::table('members')->get();
        return view('members.index', compact('members', 'member_number'));
    }

    public function create()
    {

        return view('members.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' =>' required',
            'description' => ['required','max:9500'],
        ]);
        auth()->user()->members()->create($data);
        return  redirect('/members');
    }

    public function show(Members $members)
    {
        return view('members.show', compact('members'));
    }

    public function edit(Members $members)
    {
        return view('members.edit', compact('members'));
    }

    public function update(Request $request,Members $members)
    {
        $request->validate([
            'name' => 'required',
            'description' => ['required','max:9500'],
        ]);
        $members->update($request->all());

        return redirect()->route('members.index')
            ;

    }

    public function destroy(Members $members)
    {
        auth()->user()->members()->delete();
        return redirect('/members');
    }
}
