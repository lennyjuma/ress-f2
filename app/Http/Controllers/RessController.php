<?php

namespace App\Http\Controllers;

use App\Ress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit','store','create','update','delete');
    }
    public function index()
    {
//        $reference_number = DB::table('reference')->count();
        $ress = collect(DB::table('resses')->get());
//        $half = $reference_number/2; // half of the total count
//        $ress = Ress::get();
//        $reference1 = array_slice($reference, 0, $half);      // returns first half
//        $reference2 = array_slice($reference, $half);  // returns second half
//        //THIS RETURNS CHUNKS FROM THE CONRTROLLER USE DD TO SEE
//        $chunks = $reference->chunk(2);
//        $reference=$chunks->toArray();
//        dd( $reference);
        ///////////THIS RETURNS JSON
//        return json_encode($reference);
        return  view('cv.index', compact('ress'));

    }

    public function create()
    {
        return view('cv.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' =>' required',
            'duration' =>'required',
            'duties' => ['required','max:9500'],
            'description' => ['required','max:9500'],
            'achievements' => ['required','max:9500'],
        ]);
        auth()->user()->ress()->create($data);
        return  redirect('/cv');
    }
    public function show($ress)
    {
//        dd($reference->get());
        $ress = Ress::findOrFail($ress);
        return view('cv.show', compact('ress'));
    }

    public function edit(Ress $ress)
    {
//        dd($reference);
        return view('cv.edit', compact('ress'));
    }

    public function update(Request $request,Ress $ress)
    {
        $request->validate([
            'title' =>' required',
            'duration' =>' required',
            'duties' => ['required','max:9500'],
            'description' => ['required','max:9500'],
            'achievements' => ['required','max:9500'],
        ]);
        $ress->update($request->all());

        return redirect()->route('cv.index');

    }
}
