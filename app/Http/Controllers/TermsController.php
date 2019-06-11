<?php

namespace App\Http\Controllers;

use App\Term;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Term::paginate(20);
        return view('terms.index')->withTerms($terms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $term = Term::create (request()->validate([
            'image' => ['required'],
            'title' => ['required'],
            'number' => ['required'],
            'description' => ['required'],
            'semester' => ['required'],
        ],
            [
                'image.required' => 'Image is verplicht!',
                'title.required' => 'Title is verplicht!',
                'number.required' => 'Number is verplicht!',
                'description.required' => 'Description is verplicht!',
                'semester.required' => 'Semester is verplicht!',
            ]));

        return redirect(route('terms.index'))->withSuccess('Term succesvol toegevoegd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {

        return view('terms.show', compact('term'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $term = Term::findOrFail($id);
        return view('terms.edit')->withTerm($term);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate([
            'image' => ['required'],
            'title' => ['required'],
            'number' => ['required'],
            'description' => ['required'],
            'semester' => ['required'],
        ],
            [
                'image.required' => 'Image mag niet leeg zijn!',
                'title.required' => 'Title mag niet leeg zijn!',
                'number.required' => 'Number mag niet leeg zijn!',
                'description.required' => 'Description mag niet leeg zijn!',
                'semester.required' => 'Semester mag niet leeg zijn!',
            ]);
        $term = Term::findOrFail($id);
        $term->update(request()->all());

        return redirect(route('terms.index'))->withSuccess('Wijziging opgeslagen!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $term = Term::findOrFail($id);
        $term->delete();

         return redirect(route('terms.index'))->withSuccess('Term verwijderd!');
    }
}
