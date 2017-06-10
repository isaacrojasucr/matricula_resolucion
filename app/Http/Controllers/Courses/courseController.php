<?php

namespace App\Http\Controllers\Courses;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\carrer;
use App\course;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Storage;

class courseController extends Controller
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
            $course = course::where('initial', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('period', 'LIKE', "%$keyword%")
				->orWhere('cycle', 'LIKE', "%$keyword%")
				->orWhere('plan', 'LIKE', "%$keyword%")
				->orWhere('carrer', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $course = course::paginate($perPage);
        }


        $carrers = array();

        $i = 0;

        foreach ($course as $item){

            $temp = carrer::find(''.$item->carrer);

            $carrers =  array_add($carrers, $i, $temp->name);

            $i++;
        }

        foreach ($course as $item){
            $course->plan = Storage::url(''.$item->plan);
        }



        return view('course.course.index', compact('course','carrers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $items = carrer::all();

        $carrers =  array();

        foreach ($items as $item){

            $carrers =  array_add($carrers, $item->id, $item->name);

        }

        return view('course.course.create', compact('carrers'));
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
        $course = new course();

        $course->name = $request->name;
        $course->period = $request->period;
        $course->initial = $request->initial;
        $course->carrer = $request->carrer;
        $course->cycle = $request->cycle;
        if (!empty($request->file('plan_file'))){

            $course->plan = $request->file('plan_file')->store('');

        }else{
            $course->plan =  '';
        }

        $course->save();

        return redirect('course/course');
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
        $course = course::findOrFail($id);

        $carrer =  carrer::findOrFail($course->carrer);

        return view('course.course.show', compact('course','carrer'));
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

        $items = carrer::all();

        $carrers =  array();

        foreach ($items as $item){

            $carrers =  array_add($carrers, $item->id, $item->name);

        }

        $course = course::findOrFail($id);


        return view('course.course.edit', compact('course', 'carrers'));
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
        $course = course::findOrFail($id);

        $course->name = $request->name;
        $course->period = $request->period;
        $course->initial = $request->initial;
        $course->carrer = $request->carrer;
        $course->cycle = $request->cycle;

        if (!empty($request->file('plan_file'))){

            $course->plan = $request->file('plan_file')->store('');
            
        }else{
            $course->plan =  '';
        }

        $course->update();

        return redirect('course/course');
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
        course::destroy($id);

        Session::flash('flash_message', 'course deleted!');

        return redirect('course/course');
    }
}
