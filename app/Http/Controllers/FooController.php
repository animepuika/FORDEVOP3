<?php

namespace App\Http\Controllers;

use App\Models\Foo;
use App\Http\Requests\StoreFooRequest;
use App\Http\Requests\UpdateFooRequest;
use Illuminate\Http\Request;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foos = Foo::latest()->simplePaginate(15);
        return view('foo.index', compact('foos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('foo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFooRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFooRequest $request)
    {
        $foo = Foo::create($request->validated());
        $msg = "New foo creation successful! ";

        return redirect(route('foo.show', $foo))->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function show(Foo $foo)
    {
        return view('foo.show', compact('foo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function edit(Foo $foo)
    {

        return view('foo.edit', compact('foo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFooRequest  $request
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFooRequest $request, Foo $foo)
    {
        $foo->update($request->validated());

        $msg = "Foo update successful! ";

        return redirect(route('foo.show', $foo))->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foo $foo)
    {
        Foo::find($foo)->each->delete();

        return redirect('/foo');
    }
}
