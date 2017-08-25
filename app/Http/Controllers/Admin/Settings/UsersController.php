<?php

namespace App\Http\Controllers\Admin\Settings;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagementFormRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::where('id', '!=', $request->user()->id)
            ->with('role')->latest()->get();

        return view('admin.settings.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.users.create');
    }

    /**
     * Store a newly created login user in storage.
     *
     * @param  \Illuminate\Http\Requests\UserManagementFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserManagementFormRequest $request)
    {
        User::create($request->all());

        return redirect()->route('settings.users.index')
            ->withSuccess('New login user created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.settings.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\UserManagementFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserManagementFormRequest $request, User $user)
    {
        $user->update($request->all());

        return redirect()->route('settings.users.index')
            ->withSuccess('User info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $status = ($user->status == 1 ? 2 : 1);
        $user->status = $status;
        $user->save();

        return back()->withSuccess(
            'User Status ' . ($status == 2 ? 'suspended' : 'activated') . ' successfully'
        );
    }
}
