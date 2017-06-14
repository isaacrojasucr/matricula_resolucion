<?php

namespace App\Http\Controllers\SecondLocations;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pwcnm_second_location;
use Illuminate\Http\Request;
use Session;

class pwcnm_second_locationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pwcnm_second_location = pwcnm_second_location::where('name', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $pwcnm_second_location = pwcnm_second_location::paginate($perPage);
        }

        return view('secondLocation.pwcnm_second_location.index', compact('pwcnm_second_location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('secondLocation.pwcnm_second_location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        pwcnm_second_location::create($requestData);


        return redirect('admin/sedes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pwcnm_second_location = pwcnm_second_location::findOrFail($id);

        return view('secondLocation.pwcnm_second_location.show', compact('pwcnm_second_location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pwcnm_second_location = pwcnm_second_location::findOrFail($id);

        return view('secondLocation.pwcnm_second_location.edit', compact('pwcnm_second_location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();


        
        $pwcnm_second_location = pwcnm_second_location::findOrFail($id);
        $pwcnm_second_location->update($requestData);

        Session::flash('flash_message', 'pwcnm_second_location updated!');

        return redirect('admin/sedes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        pwcnm_second_location::destroy($id);

        Session::flash('flash_message', 'pwcnm_second_location deleted!');

        return redirect('admin/sedes');
    }
}
