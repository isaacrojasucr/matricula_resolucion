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
        $perPage = 15;

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


        $carrerss = array();

        $i = 0;

        foreach ($course as $item){

            $temp = carrer::find(''.$item->carrer);

            $carrerss =  array_add($carrerss, $i, $temp->name);

            $i++;
        }

        $items = carrer::all();

        $carrers =  array();

        foreach ($items as $item){

            $carrers =  array_add($carrers, $item->id, $item->name);

        }

        return view('course.course.index', compact('course','carrerss', 'carrers'));
    }

    public function downloadFile($file){
        $pathtoFile = storage_path().'\app\\'.$file;
        return response()->download(''.$pathtoFile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $this->validation();
        
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
        $this->validation();
        
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

        return redirect('admin/cursos');
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
        $this->validation();

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
        $this->validation();
        
        $course = course::findOrFail($id);

        $course->name = $request->name;
        $course->period = $request->period;
        $course->initial = $request->initial;
        $course->carrer = $request->carrer;
        $course->cycle = $request->cycle;

        if (!empty($request->file('plan_file'))){

            $course->plan = $request->file('plan_file')->store('');
            
        }

        $course->update();

        return redirect('admin/cursos');
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
        
        course::destroy($id);

        Session::flash('flash_message', 'course deleted!');

        return redirect('admin/cursos');
    }
}
