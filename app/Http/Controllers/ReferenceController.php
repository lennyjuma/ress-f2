<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('edit','store','create','update','delete');
        $this->middleware('role:Admin')->only('edit','store','create','update','delete');

    }
    public function index()
    {
//        $reference_number = DB::table('reference')->count();
        $reference = collect(DB::table('reference')->get());
//        $half = $reference_number/2; // half of the total count
//        $reference1 = array_slice($reference, 0, $half);      // returns first half
//   e     $reference2 = array_slice($reference, $half);  // returns second half
//        //THIS RETURNS CHUNKS FROM THE CONRTROLLER USE DD TO SEE
//        $chunks = $reference->chunk(2);
//        $reference=$chunks->toArray();
//        dd( $reference);
        ///////////THIS RETURNS JSON
//        return json_encode($reference);
            return  view('cv.index', compact('reference'));

    }

    public function create()
    {
        return view('cv.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' =>' required',
            'duration' =>'',
            'duties' => ['required','max:9500'],
            'description' => ['required','max:9500'],
            'achievements' => ['required','max:9500'],
        ]);
        auth()->user()->reference()->create($data);
        return  redirect('/cv');
    }
    public function show(Reference $reference)
    {
//        dd($reference->get());
        return view('cv.show', compact('reference'));
    }

    public function edit(Reference $reference)
    {
//        dd($reference);
        return view('cv.edit', compact('reference'));
    }

    public function update(Request $request,Reference $reference)
    {
        $request->validate([
            'title' =>' required',
            'duties' => ['required','max:9500'],
            'description' => ['required','max:9500'],
            'achievements' => ['required','max:9500'],
        ]);
        $reference->update($request->all());

        return redirect()->route('cv.index');

    }
}
