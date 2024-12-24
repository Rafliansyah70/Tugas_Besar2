<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rule;

class PermissionController extends Controller
{
    public function index()
    {
        $data = Permission::orderBy('id', 'DESC')->get();
        return view('admin.permission.index', compact('data'));
    }

    public function create()
    {
        return view('admin.permission.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('permissions', 'name')->ignore($request->id)],
        ]);

        $permission = Permission::updateOrCreate(
            ['id' => $request->id],
            ['name' => $request->name]
        );

        $msg = $request->id ? 'Permission updated successfully.' : 'Permission created successfully.';

        return redirect()->route('admin.permission.index')->with('success', $msg);
    }

    public function edit($id)
    {
        $data = Permission::findOrFail(decrypt($id));
        return view('admin.permission.edit', compact('data'));
    }

    public function destroy($id)
    {
        $permission = Permission::findOrFail(decrypt($id));

        // Tambahkan pengecekan jika permission terhubung dengan entitas lain (opsional)
        // if ($permission->roles()->exists() || $permission->users()->exists()) {
        //     return redirect()->route('admin.permission.index')->with('error', 'Cannot delete permission. It is assigned to roles or users.');
        // }

        $permission->delete();

        return redirect()->route('admin.permission.index')->with('success', 'Permission deleted successfully.');
    }
}
