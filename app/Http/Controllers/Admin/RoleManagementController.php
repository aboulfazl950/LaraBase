<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest()->paginate(20);
        $permissions = Permission::where('is_crud',false)->get();
        $crud_permissions = Permission::where('is_crud',true)->get();

        return view('user-management.roles.list', compact('roles','permissions','crud_permissions'));
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
        $permissions = $request->except('_token', 'role_display_name', 'role_name');
        $role->givePermissionTo($permissions);

        alert()->success('نقش مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('user-management.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('user-management.roles.view', compact('role'));
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
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'role_name' => 'required',
            'role_display_name' => 'required'
        ]);

        $role->update([
            'name' => $request->role_name,
            'display_name' => $request->role_display_name
        ]);
        $permissions = $request->except('_token', 'role_display_name', 'role_name','_method');
        $role->syncPermissions($permissions);

        alert()->success('نقش مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('user-management.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showModal(Role $role)
    {
        $permissions = Permission::where('is_crud',false)->get();
        $crud_permissions = Permission::where('is_crud',true)->get();
        return view('user-management.roles.edit-role-modal', compact('role','permissions','crud_permissions'));
    }
}
