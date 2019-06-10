<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class PagesController extends Controller
{
    public function index(){
        $pages = Pages::all();
        return view('pages.index', compact('pages'));
    }

    public function create(){
        $pages = Pages::all();
        return view('pages.create', compact('pages'));
    }

    public function edit($id)
    {
        $pages = Pages::findOrFail($id);
        return view('pages.edit', compact('pages'));
    }

    public function store(Request $request)
    {
        $pages = new pages();

        $pages->id = request('id');
        $pages->titke = request('titke');
        $pages->text = request('text');
        $pages->save();

        return redirect('/pages');
    }

    public function update($id, Request $request)
    {
        $pages = Pages::findOrFail($id);

        $pages->id = request('id');
        $pages->titke = request('titke');
        $pages->text = request('text');
        $pages->save();

        return redirect('/pages');
    }

    public function destroy($id)
    {
        Pages::findOrFail($id)->delete();
        return redirect('/pages');
    }
}
