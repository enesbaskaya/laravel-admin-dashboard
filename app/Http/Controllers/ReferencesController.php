<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\References;
use Illuminate\Http\Request;

class ReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = References::all();
        return view('all-references', compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('add-references', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $requestdddd
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required | image'
        ]);

        $reference = new References();
        if ($request->hasFile('image')) {
            $filename = $request->companyName . '.' . $request->image->extension();
            $request->image->move(public_path('front/reference-image/'), $filename);

            $reference->image = 'front/reference-image' . '/' . $filename;
        }

        $reference->companyName = $request->companyName;
        $reference->url = $request->link;
        $reference->sector = $request->sector;
        $reference->date = $request->date;
        $reference->isActive = '1';
        $reference->categoryId = $request->category;
        $reference->save();

        return redirect()->route('references.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $references = References::findOrFail($id);
        $categories = Category::all();
        return view('edit-references', compact('references', 'categories'));

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
        $reference = References::findOrFail($id);
        $reference->companyName = $request->companyName;
        $reference->url = $request->link;
        $reference->sector = $request->sector;
        $reference->date = $request->date;
        $reference->categoryId = $request->category;

        if ($request->hasFile('image')) {
            $path = public_path() . $reference->image;
            \File::delete($path);

            $Image = $reference->companyName . '.' . $request->image->extension();
            $request->image->move(public_path('front/reference-image/'), $Image);
            $reference->image = 'front/reference-image' . '/' . $Image;
        }

        $reference->save();

        return redirect()->route('references.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reference = References::findOrFail($id);
        $isActive = $reference->isActive;
        if ($isActive == '0') {
            $reference->isActive = '1';
            $reference->save();
        } elseif ($isActive == '1') {
            $reference->isActive = '0';
            $reference->save();
        }

        return redirect()->route('references.index');
    }


}
