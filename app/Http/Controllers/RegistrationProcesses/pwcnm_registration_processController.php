<?php

namespace App\Http\Controllers\RegistrationProcesses;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pwcnm_registration_process;
use Illuminate\Http\Request;
use Session;

class pwcnm_registration_processController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function validation (){
        $manager = app()->make('auth');
        $role = $manager->user()->role;

        if ($role == 2){
            abort(403);
        }
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $this->validation();

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

        foreach ($pwcnm_registration_process as $item){
            $dias = $this->dias_restantes($item->FinalDate);

            $item->FinalDate = $dias;
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
        $this->validation();
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
        $this->validation();
        $requestData = $request->all();
        
        pwcnm_registration_process::create($requestData);


        return redirect('admin/procesos');
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
        $this->validation();
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
        $this->validation();
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

        $this->validation();

        $requestData = $request->all();
        
        $pwcnm_registration_process = pwcnm_registration_process::findOrFail($id);
        $pwcnm_registration_process->update($requestData);

        Session::flash('flash_message', 'pwcnm_registration_process updated!');

        return redirect('admin/procesos');
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
        $this->validation();
        pwcnm_registration_process::destroy($id);

        return redirect('admin/procesos');
    }

    function dias_restantes($fecha_final) {
        $fecha_actual = date("Y-m-d");
        $s = strtotime($fecha_final)-strtotime($fecha_actual);
        $d = intval($s/86400);
        $diferencia = $d;
        return $diferencia;
    }
}
