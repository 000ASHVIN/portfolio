<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Site;
use App\SiteInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_informations = SiteInformation::all();
        return view('admin.site_information.index', compact('site_informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = Site::select('id','name')->get();
        return view('admin.site_information.create', compact('sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'image' => ['required'],
        ]);

        $data = $request->except('image');

        $siteInformation = SiteInformation::create($data);

        if($request->image) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = 'site-information-'.$siteInformation->id.'.'.$extension;

            $directory = '/images/site/';
            $file->storeAs($directory, $filename, 'public');
            // Storage::disk('local')->put($directory, 'Contents');
            $siteInformation->image = "images/site/".$filename;
            $siteInformation->save();
        }

        return redirect('/admin/site_information')->with('success','site information added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteInformation  $siteInformation
     * @return \Illuminate\Http\Response
     */
    public function show(SiteInformation $siteInformation)
    {
        $site_informations = $siteInformation;
        return view('admin.site_information.show', compact('site_informations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteInformation  $siteInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteInformation $siteInformation)
    {
        $sites = Site::select('id','name')->get();
        $site_information = $siteInformation;
        // dd($siteInformation);
        return view('admin.site_information.edit', compact('site_information', 'sites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteInformation  $siteInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteInformation $siteInformation)
    {
        $data = $request->except('image');

        $siteInformation->update($data);

        if($request->image) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = 'site-information-'.$siteInformation->id.'.'.$extension;

            if(Storage::exists('public/images/site/'.$filename)) {
                Storage::delete('public/images/site/'.$filename);
            }

            $directory = '/images/site/';
            $file->storeAs($directory, $filename, 'public');
            $siteInformation->image = "images/site/".$filename;
            $siteInformation->save();
        }

        return redirect('/admin/site_information')->with('success','site information added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteInformation  $siteInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteInformation $siteInformation)
    {
        if(Storage::exists('public/'.$siteInformation->image)) {
            Storage::delete('public/'.$siteInformation->image);
        }
        $siteInformation->delete();
        return back();
    }
}
