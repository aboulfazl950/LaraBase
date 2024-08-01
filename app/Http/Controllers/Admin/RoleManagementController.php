<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest()->paginate(20);
        return view('user-management.roles.list', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required',
            'role_display_name' => 'required'
        ]);

        $role = Role::create([
            'name' => $request->role_name,
            'display_name' => $request->role_display_name,
            'guard_name' => 'web'
        ]);
        //$permissions = $request->except('_token', 'display_name', 'name');
        //$role->givePermissionTo($permissions);

        alert()->success('نقش مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('user-management.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('user-management.roles.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
