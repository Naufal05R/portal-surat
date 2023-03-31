<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letter = Letter::all();

        return view('admin.letter.index', compact(
            'letter'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.letter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        $letter = Letter::create([
            'title' => $request->title,
            'address' => $request->address,
            'content' => $request->content,
            'date' => $request->date,
        ]);

        if ($letter) {
            return redirect()->route('letter.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letter = Letter::findOrFail($id);

        return view('admin.letter.show', compact('letter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $letter = Letter::findOrFail($id);

        return view('admin.letter.edit', compact('letter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letter $letter)
    {
        $letter = Letter::findOrFail($letter->id);
        $letter->update([
            'title' => $request->title,
            'address' => $request->address,
            'content' => $request->content,
            'date' => $request->date,
        ]);

        if ($letter) {
            return redirect()->route('letter.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $letter = Letter::findOrFail($id);
        $letter->delete();

        return redirect()->route('letter.index');
    }
}
