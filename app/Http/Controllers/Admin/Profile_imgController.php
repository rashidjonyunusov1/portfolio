<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile_img;
use Illuminate\Http\Request;

class Profile_imgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile_img = Profile_img::orderBy('id', 'DESC')->paginate(2);

        return view('admin.profile_img.index', compact('profile_img'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profile_img.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Profile_img::create($request->all());

        if($request->hasFile('img'))
        {
            $requestData['img'] = $this->file_upload();
        }

        Profile_img::create($requestData);

        return redirect()->route('admin.profile_img.index')->with('success', 'Success Done');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile_img $profile_img)
    {
        return view('admin.profile_img.show', compact('profile_img'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile_img $profile_img)
    {
        return view('admin.profile_img.edit', compact('profile_img'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile_img $profile_img)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            if (isset($profile_img->img) && file_exists(public_path('/img/'.$profile_img->img)))
             {
                unlink(public_path('/img/'.$profile_img->img));
            }
        $requestData['img'] = $this->file_upload();

        $profile_img->update($requestData);

        return redirect()->route('admin.profile_img.index')->with('success', 'Update Done');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile_img $profile_img)
    {
        if(isset($profile_img->img) && file_exists(public_path('/img/'.$profile_img->img)))
        {
            unlink(public_path('/img/'.$profile_img->img));
        }
        $profile_img->delete();

        return redirect()->route('admin.profile_img.index')->with('success', 'Delete Done');
    }

    public function file_upload()
    {
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('img/', $fileName);
        return $fileName;
    }
}