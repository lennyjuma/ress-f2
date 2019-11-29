<?php

namespace App\Http\Controllers;

use App\About;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit','store','create','update','delete');
        $this->middleware('role:Admin')->only('edit','store','create','update','delete');

    }

    public function index()
    {
        $service_number = DB::table('services')->count();
        $service = DB::table('services')->get();
        return view('service.index', compact('service', 'service_number'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' =>' required',
            'description' => ['required','max:9500'],
        ]);
        auth()->user()->service()->create($data);
        return  redirect('/service');
    }
    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    public function update(Request $request,Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => ['required','max:9500'],
        ]);
        $service->update($request->all());

        return redirect()->route('service.index');
    }
}
