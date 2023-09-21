<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resume = Resume::orderBy('id', 'DESC')->paginate(2);
        return view('admin.resume.index', compact('resume'));
    }

    public function create()
    {
        return view('admin.resume.create');
    }


    public function store(Request $request)
    {
        // dd($request);
        $requestData = $request->all();

        if($request->hasFile('resume'))
        {
          $requestData['resume'] = $this->file_upload();
        }

        Resume::create($requestData);



        return redirect()->route('admin.resume.index')->with('success', 'Success done');
    
    }

    
    public function show(Resume $resume)
    {
        return view('admin.resume.show', compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        return view('admin.resume.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $requestData = $request->all();

        if($request->hasFile('resume'))
        {
            if(isset($resume->resume) and file_exists(public_path('/resume/'.$resume->resume)))
            {
                unlink(public_path('/resume/'.$resume->resume));
            }
          $requestData['resume'] = $this->file_upload();
        
        $resume->update($requestData);
        
        return redirect()->route('admin.resume.index')->with('success', 'Update done');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        if(isset($resume->resume) && file_exists(public_path('/resume/'.$resume->resume)))
        {
            unlink(public_path('/resume/'.$resume->resume));
        }

        $resume->delete();
        return redirect()->route('admin.resume.index')->with('success', 'Delete done');
    }

    public function file_upload()
    {
        $file = request()->file('resume');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('resume/', $fileName);
        return $fileName;
    }
}


