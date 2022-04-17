<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('admin.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.user-new', compact('users'));
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
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'status' => $request->status,
        ]);
        
        return redirect('/user')->with('status', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('admin.user-view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return view('admin.user-update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);

        User::where('id', $user->id)
                ->update([
                    'name' => $request->name,
                    'email'=> $request->email,
                    'password' => $request->password,
                    'role' => $request->role,
                    'status' => $request->status,
                ]);
        
        return redirect('/user')->with('status', 'User berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        User::destroy($id);
        return redirect('/user')->with('status', 'User berhasil dihapus');
    }
}
