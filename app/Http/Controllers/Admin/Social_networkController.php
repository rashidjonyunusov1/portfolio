<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Social_networkStoreRequest;
use App\Http\Requests\Social_networkUpdateRequest;
use App\Models\Social_network;
use Illuminate\Http\Request;

class Social_networkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social_network = Social_network::orderBy('id', 'DESC')->paginate(2);
        return view('admin.social_networks.index', compact('social_network'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social_networks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Social_networkStoreRequest $request)
    {
        Social_network::create($request->all());

        return redirect()->route('admin.social_networks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Social_network $social_network)
    {
        return view('admin.social_networks.show', compact('social_network'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social_network $social_network)
    {
        return view('admin.social_networks.edit', compact('social_network'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Social_networkUpdateRequest $request, Social_network $social_network)
    {
        $requestData = $request->all();

        $social_network->update($requestData);

        return redirect()->route('admin.social_networks.index')->with('success', 'Update Done');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social_network $social_network)
    {
        $social_network->delete();
        return redirect()->route('admin.social_networks.index')->with('success', 'Delete Done');
    }
}
