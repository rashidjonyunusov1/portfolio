<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fact = Fact::orderBy('id' , 'DESC')->paginate(2);
        return view('admin.facts.index', compact('fact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Fact::create($request->all());

        return redirect()->route('admin.facts.index')->with('success', 'Seccess Done');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fact $fact)
    {
        return view('admin.facts.show', compact('fact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fact $fact)
    {
        return view('admin.facts.edit', compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fact $fact)
    {
        $requestData = $request->all();

        $fact->update($requestData);

        return redirect()->route('admin.facts.index')->with('success', 'Update Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fact $fact)
    {
        $fact->delete();
        return redirect()->route('admin.facts.index')->with('success', 'Delete done');
    }
}
