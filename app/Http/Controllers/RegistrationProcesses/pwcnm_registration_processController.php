<?php

namespace App\Http\Controllers\RegistrationProcesses;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pwcnm_registration_process;
use Illuminate\Http\Request;
use Session;

class pwcnm_registration_processController extends Controller
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
            $pwcnm_registration_process = pwcnm_registration_process::where('period', 'LIKE', "%$keyword%")
				->orWhere('anno', 'LIKE', "%$keyword%")
				->orWhere('InitialDate', 'LIKE', "%$keyword%")
				->orWhere('FinalDate', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $pwcnm_registration_process = pwcnm_registration_process::paginate($perPage);
        }

        return view('registrationProcess.pwcnm_registration_process.index', compact('pwcnm_registration_process'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('registrationProcess.pwcnm_registration_process.create');
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
        
        pwcnm_registration_process::create($requestData);

        Session::flash('flash_message', 'pwcnm_registration_process added!');

        return redirect('registrationProcess/pwcnm_registration_process');
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
        $pwcnm_registration_process = pwcnm_registration_process::findOrFail($id);

        return view('registrationProcess.pwcnm_registration_process.show', compact('pwcnm_registration_process'));
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
        $pwcnm_registration_process = pwcnm_registration_process::findOrFail($id);

        return view('registrationProcess.pwcnm_registration_process.edit', compact('pwcnm_registration_process'));
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
        
        $pwcnm_registration_process = pwcnm_registration_process::findOrFail($id);
        $pwcnm_registration_process->update($requestData);

        Session::flash('flash_message', 'pwcnm_registration_process updated!');

        return redirect('registrationProcess/pwcnm_registration_process');
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
        pwcnm_registration_process::destroy($id);

        Session::flash('flash_message', 'pwcnm_registration_process deleted!');

        return redirect('registrationProcess/pwcnm_registration_process');
    }
}
