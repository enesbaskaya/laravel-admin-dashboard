<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::find(1);
        return view('about', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::find(1);
        $about->aboutDetail = $request->about;
        $about->missionDetail = $request->mission;
        $about->visionDetail = $request->vision;

        if ($request->hasFile('image')) {
            $path = public_path() . $about->aboutImage;
            \File::delete($path);

            $Image = 'about.' . $request->image->extension();
            $request->image->move(public_path('front/about-image/'), $Image);
            $about->aboutImage = 'front/about-image' . '/' . $Image;
        }

        $about->save();

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
