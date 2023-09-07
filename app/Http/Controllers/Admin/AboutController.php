<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $about = About::latest()->take(1)->get();
        $about = About::orderBy('id', 'DESC')->paginate(2);
        return view('admin.abouts.index', compact('about'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutStoreRequest $request)
    {
        // dd($request);

        // request()->validate([
        //     'img' => 'required|mimes:png,jpg|max:20480',
        //     'description1' => 'required|min:30|max:1000000000000000000',
        //     'title' => 'required',
        //     'brithday' => 'required',
        //     'website' => 'required',
        //     'phone' => 'required',
        //     'city' => 'required',
        //     'age' => 'required',
        //     'dagree' => 'required',
        //     'email' => 'required',
        //     'freelance' => 'required',
        //     'description2' => 'required'
        // ]);

        $requestData = $request->all();


        if($request->hasFile('img'))
        {
          $requestData['img'] = $this->file_upload();
        }

        About::create($requestData);
        
        return redirect()->route('admin.abouts.index')->with('success', 'Success done');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
       return view('admin.abouts.show', compact('about'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
       return view('admin.abouts.edit', compact('about'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, About $about)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            if(isset($about->img) and file_exists(public_path('/img/'.$about->img)))
            {
                unlink(public_path('/img/'.$about->img));
            }
          $requestData['img'] = $this->file_upload();
        
        $about->update($requestData);
        
        return redirect()->route('admin.abouts.index')->with('success', 'Update done');
    }
}

   
    public function destroy(About $about)
    {
        if(isset($about->img) && file_exists(public_path('/img/'.$about->img)))
        {
            unlink(public_path('/img/'.$about->img));
        }

        $about->delete();
        return redirect()->route('admin.abouts.index')->with('success', 'Delete done');
    }

    
    public function file_upload()
    {
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('img/', $fileName);
        return $fileName;
    }
}
