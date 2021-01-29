<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all();
        return view('all-services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $services = new Services();
        if ($request->hasFile('simage') && $request->hasFile('pimage')) {
            $sImage = $request->name . 'Service.' . $request->simage->extension();
            $request->simage->move(public_path('front/services-image/'), $sImage);
            $pImage = $request->name . 'Packet.' . $request->pimage->extension();
            $request->pimage->move(public_path('front/services-image/'), $pImage);

            $services->servicesImage = 'front/services-image' . '/' . $sImage;
            $services->packetImage = 'front/services-image' . '/' . $pImage;
        }

        $services->name = $request->name;
        $services->desc = $request->desc;
        $services->isActive = '1';
        $services->save();
        return redirect()->route('services.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Services $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
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
        $services = Services::findOrFail($id);
        return view('edit-services', compact('services'));
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
        $service = Services::findOrFail($id);
        $service->name = $request->name;
        $service->desc = $request->desc;

        if ($request->hasFile('pimage') && $request->hasFile('simage')) {
            $path = public_path() . $service->simage;
            \File::delete($path);
            $path2 = public_path() . $service->pimage;
            \File::delete($path2);

            $sImage = $service->name . 'service.' . $request->simage->extension();
            $request->simage->move(public_path('front/services-image/'), $sImage);

            $pImage = $service->name . 'packet.' . $request->pimage->extension();
            $request->pimage->move(public_path('front/services-image/'), $pImage);

            $service->servicesImage = 'front/services-image' . '/' . $sImage;
            $service->packetImage = 'front/services-image' . '/' . $pImage;
        } elseif ($request->hasFile('pimage') && !$request->hasFile('simage')) {
            $path2 = public_path() . $service->pimage;
            \File::delete($path2);

            $pImage = $service->name . 'packet.' . $request->pimage->extension();
            $request->pimage->move(public_path('front/services-image/'), $pImage);
            $service->packetImage = 'front/services-image' . '/' . $pImage;

        } elseif ($request->hasFile('simage') && !$request->hasFile('pimage')) {
            $path2 = public_path() . $service->simage;
            \File::delete($path2);

            $sImage = $service->name . 'service.' . $request->simage->extension();
            $request->simage->move(public_path('front/services-image/'), $sImage);
            $service->servicesImage = 'front/services-image' . '/' . $sImage;
        }

        $service->save();

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $isActive = $service->isActive;
        if ($isActive == '0') {
            $service->isActive = '1';
            $service->save();
        } elseif ($isActive == '1') {
            $service->isActive = '0';
            $service->save();
        }

        return redirect()->route('services.index');
    }
}
