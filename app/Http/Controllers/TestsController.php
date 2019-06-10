<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tests;

class TestsController extends Controller
{
    public function index(){
        $tests = Tests::all();
        return view('tests.index', compact('tests'));
    }

    public function create(){
        return view('tests.create');
    }

    public function store(Request $request)
    {
        $tests = new tests();
        $tests->attempt = request('attempt');
        $tests->week = request('week');
        $tests->save();

        return redirect('/tests');
    }

    public function update(Request $request)
    {
        $tests = Tests::findOrFail($id);
        $tests->attempt = request('attempt');
        $tests->week = request('week');
        $tests->save();

        return redirect('/tests');
    }
}
