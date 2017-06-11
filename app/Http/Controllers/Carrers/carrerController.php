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
            $carrer = carrer::where('initial', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('page', 'LIKE', "%$keyword%")
				->orWhere('manager', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $carrer = carrer::paginate($perPage);
        }

        $managers = array();

        $i = 0;
        foreach ($carrer  as $item){

            $data = \DB::table('users')->where('id',''.$item->manager)->first();

            $managers = array_add($managers,$i,$data->name.' '.$data->lastname);
            $i ++;
        }

        return view('carrers.carrer.index', compact('carrer','managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $temp = User::all();

        $managers = array();

        foreach ($temp as $item){

            $managers =  array_add($managers,$item->id, $item->name.' '.$item->lastname);

        }

        return view('carrers.carrer.create', compact('managers'));
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
        
        carrer::create($requestData);

        Session::flash('flash_message', 'carrer added!');

        return redirect('career/career');
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

        $temp = User::all();

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
        
        $carrer = carrer::findOrFail($id);
        $carrer->update($requestData);

        Session::flash('flash_message', 'carrer updated!');

        return redirect('career/career');
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

        return redirect('career/career');
    }
}
