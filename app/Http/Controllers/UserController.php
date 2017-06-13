<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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
            $user = user::where('name', 'LIKE', "%$keyword%")
                ->orWhere('lastname', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('role', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $user = user::paginate($perPage);
        }

        return view('users.user.index', compact('user'));
    }


    /**
     * Show the form for creating a new resource
     *
     * @return Response
     */
    public function create(){
        return view('users.user.create');
    }

    /**
     * Store a newly created resource in storage
     *
     * @return Response
     */
    public function store(Request $Request){
        $user = new User();

        $user->name = $Request->name;
        $user->lastname = $Request->lastname;
        $user->password = Hash::make($Request->password);
        $user->email = $Request->email;
        $user->role = 1;
        $user->save();

        return redirect('admin/usuarios');
    }

    public function edit($id)
    {
        $user = user::findOrFail($id);

        return view('users.user.update', compact('user'));
    }

    public function update($id, Request $Request)
    {

        $user = user::findOrFail($id);

        $user->name = $Request->name;
        $user->lastname = $Request->lastname;
        $user->password = Hash::make($Request->password);
        $user->email = $Request->email;
        $user->role = 1;

        $user->update();

        return redirect('admin/usuarios');
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
        $user = user::findOrFail($id);


        return view('users.user.show', compact('user'));
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
        user::destroy($id);

        return redirect('admin/usuarios');
    }

}
