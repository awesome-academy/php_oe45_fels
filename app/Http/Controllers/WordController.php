<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function filter($filter)
    {
        $learned_words = auth()->user()->learned_word;
        if ($filter == "Learned") {
            $words = Word::whereIn('id', $learned_words)->paginate(config('app.list_word_paginate'));
        } elseif ($filter == "Unlearned") {
            $words = Word::whereNotIn('id', $learned_words)->paginate(config('app.list_word_paginate'));
        } else {
            $words = Word::paginate(config('app.list_word_paginate'));
        }

        return view('word.list')->with('words', $words);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::paginate(config('app.list_word_paginate'));

        return view('word.list')->with('words', $words);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $word = Word::find($id);
        if (auth()->user()) {
            $learned_words = auth()->user()->learned_word;
            if (in_array($id, $learned_words)) {
                $learned = true;
            } else {
                $learned = false;
            }
        } else {
            $learned = false;
        }
        
        return view('word.detail')->with('word', $word)->with('learned', $learned);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
