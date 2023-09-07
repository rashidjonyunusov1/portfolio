<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::orderBy('id', 'DESC')->paginate(2);

        return view('admin.home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Home::create($request->all());

        return redirect()->route('admin.home.index')->with('seccess', 'Success done');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('admin.home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('admin.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $requestData = $request->all();

        $home->update($requestData);

        return redirect()->route('admin.home.index')->with('success', 'Update Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('admin.home.index')->with('success', 'Delete Done');
    }
}
