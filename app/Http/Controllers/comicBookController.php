<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comicBookController extends Controller
{
    /**
     * Show the index for the resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->sort == 'byDate'){
            $comicBooks = \App\Models\comicBook::sortable()->orderByDesc('publication_year')->orderByDesc('publication_month')->paginate(25);
            return view('comicBooks.index', compact('comicBooks'));
        }else if($request->sort == 'byCondition'){
            echo('by condition');

        }else{
            $comicBooks = \App\Models\comicBook::sortable()->paginate(25);
            return view('comicBooks.index', compact('comicBooks'));
        }
    }

    public function sortByDate()
    {
        $comicBooks = \App\Models\comicBook::orderBy('publication_year', 'DESC')->orderBy('publication_month', 'DESC')->paginate(25);
        return view('comicBooks.index', compact('comicBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comicBooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            ['title'=>'required',
             'volume'=>'integer|required|min:0',
             'issue_number'=>'integer|required|min:0',
             'publication_month'=>'required',
             'publication_year'=>'required',
             'condition'=>'required',
             'last_name_writer'=>'required',
             'first_name_writer'=>'required',
             'last_name_artist'=>'required',
             'first_name_artist'=>'required']
        );
        \App\Models\comicBook::create($validatedData);
        return redirect()->route('comicBooks.index')->with('success', "$request->title added to collection");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comicBook = \App\Models\comicBook::findOrFail($id);
        return view('comicBooks.show', ['comicBook'=>$comicBook]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            ['title'=>'required',
             'volume'=>'integer|required|min:0',
             'issue_number'=>'integer|required|min:0',
             'publication_month'=>'required',
             'publication_year'=>'required',
             'condition'=>'required',
             'last_name_writer'=>'required',
             'first_name_writer'=>'required',
             'last_name_artist'=>'required',
             'first_name_artist'=>'required']
        );
        \App\Models\comicBook::find($id)->update($validatedData);
        return redirect()->route('comicBooks.show', $id)->with('success', "$request->title modified");
    }

    public function edit(Request $request, $id)
    {
        $comicBook = \App\Models\comicBook::findOrFail($id);
        return view('comicBooks.edit', ['comicBook'=>$comicBook]);
    }
}
