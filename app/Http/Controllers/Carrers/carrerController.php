<?php

namespace App\Http\Controllers\Carrers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\carrer;
use App\User;
use Illuminate\Http\Request;
use Session;

class carrerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $carrer = carrer::where('initial', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('page', 'LIKE', "%$keyword%")
				->orWhere('manager', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $carrer = carrer::paginate($perPage);
        }

        $managerss = array();

        $i = 0;
        foreach ($carrer  as $item){

            $data = \DB::table('users')->where('id',''.$item->manager)->first();

            $managerss = array_add($managerss,$i,$data->name.' '.$data->lastname);
            $i ++;
        }

        $temp = User::where('role', '=', 2)->get();

        $managers = array();

        foreach ($temp as $item){

            $managers =  array_add($managers,$item->id, $item->name.' '.$item->lastname);

        }

        return view('carrers.carrer.index', compact('carrer','managerss','managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
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
        
        $career =  new carrer();
        
        $career->initial = $request->initial;
        $career->name = $request->name;

        $career->manager = $request->manager;

        if (!empty($request->page)){

            $career->page = $request->page;

        }else{
            $career->page =  'No posee';
        }

        if (!empty($request->file('plan_file'))){

            $career->plan = $request->file('plan_file')->store('');

        }else{
            $career->plan =  '';
        }


        $career->save();

        return redirect('admin/carreras');
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
        $carrer = carrer::findOrFail($id);

        $manager = user::findOrfail($carrer->manager);

        return view('carrers.carrer.show', compact('carrer','manager'));
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
        $carrer = carrer::findOrFail($id);

        $temp = User::where('role', '=', 2)->get();

        $managers = array();

        foreach ($temp as $item){

            $managers =  array_add($managers,$item->id, $item->name.' '.$item->lastname);

        }

        return view('carrers.carrer.edit', compact('carrer','managers'));
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
        
        $career = carrer::findOrFail($id);
        $career->initial = $request->initial;
        $career->name = $request->name;
        $career->page = $request->page;
        $career->manager = $request->manager;

        if (!empty($request->file('plan_file'))){

            $career->plan = $request->file('plan_file')->store('');

        }


        $career->update();

        return redirect('admin/carreras');
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
        carrer::destroy($id);

        Session::flash('flash_message', 'carrer deleted!');

        return redirect('admin/carreras');
    }
}
