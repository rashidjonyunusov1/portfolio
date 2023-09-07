<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form = Form::orderBy('id', 'DESC')->paginate(10);
        return view('admin.forms.index', compact('form'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Form::create($request->all());

        return redirect()->route('layouts.main')->with('success', 'Success Done');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        return view('admin.forms.show', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        return view('admin.forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        $requestData = $request->all();


        $form->update($requestData);

        return redirect()->route('admin.forms.index')->with('seccess' , 'Update Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('admin.forms.index')->with('success', 'Delete Done');
    }
}
