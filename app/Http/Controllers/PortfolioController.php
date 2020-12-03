<?php

namespace App\Http\Controllers;

use App\Site;
use App\SiteInformation;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.index');
    }

    public function frontendWork($site_id)
    {
        $siteInformations = SiteInformation::where('site_id', '=', $site_id)
                                            ->where('type', '=', 'frontend')
                                            ->paginate(6);
        return view('portfolio.work', compact('siteInformations'));
    }

    public function adminWork($site_id)
    {
        $siteInformations = SiteInformation::where('site_id', '=', $site_id)
                                            ->where('type', '=', 'admin')
                                            ->paginate(6);
        return view('portfolio.work', compact('siteInformations'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siteInformation = SiteInformation::find($id);
        return view('portfolio.show', compact('siteInformation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
