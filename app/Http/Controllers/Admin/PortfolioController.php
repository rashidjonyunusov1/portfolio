<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio = Portfolio::orderBy('id', 'DESC')->paginate(2);
        return view('admin.portfolios.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
          $requestData['img'] = $this->file_upload();
        }
        Portfolio::create($requestData);

        // 

        return redirect()->route('admin.portfolios.index')->with('seccess', 'Success Done');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            if(isset($portfolio->img) && file_exists(public_path('/img/'.$portfolio->img)))
            {
                unlink(public_path('/img/'.$portfolio->img));
            }
          $requestData['img'] = $this->file_upload();
        
        $portfolio->update($requestData);

        return redirect()->route('admin.portfolios.index')->with('success', 'Update Done');
    }
}
   
    public function destroy(Portfolio $portfolio)
    {
       if(isset($portfolio->img) && file_exists(public_path('/img/'.$portfolio->img)))
        {
            unlink(public_path('/img/'.$portfolio->img));
        }

        $portfolio->delete();
        return redirect()->route('admin.portfolios.index')->with('success', 'Delete Done');
    
}

public function file_upload()
{
    $file = request()->file('img');
    $fileName = time().'-'.$file->getClientOriginalName();
    $file->move('img/', $fileName);
    return $fileName;
}
}