<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\StoreSliderrRequest;
use App\Http\Requests\Slider\updateSliderrRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders=Slider::latest()->get();
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderrRequest $request)
    {
        Slider::create($request->validated());
        toast('Slider added successfully!', 'success');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateSliderrRequest $request, Slider $slider)
    {
        $slider->update($request->validated());
        toast('Slider updated successfully!', 'success');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        toast('Slider deleted successfully!', 'success');
        return redirect()->route('admin.slider.index');
    }

    public function updateStatus(Slider $slider)
    {
        $slider->update([
            'status' => !$slider->status
        ]);
        toast('Updated Successfully', 'success');
        return back();
    }

}
