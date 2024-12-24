<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    public function index()
    {
        $data = Role::orderBy('id', 'DESC')->get();
        return view('admin.role.index', compact('data'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('roles', 'name')->ignore($request->id)],
        ]);

        $role = Role::updateOrCreate(
            ['id' => $request->id],
            ['name' => $request->name]
        );

        $msg = $request->id ? 'Role updated successfully.' : 'Role created successfully.';

        return redirect()->route('admin.role.index')->with('success', $msg);
    }

    public function edit($id)
    {
        $data = Role::findOrFail(decrypt($id));
        return view('admin.role.edit', compact('data'));
    }

    public function destroy($id)
    {
        $role = Role::findOrFail(decrypt($id));

        // Tambahkan pengecekan jika ada pengguna terkait sebelum menghapus (opsional)
        if ($role->users()->exists()) {
            return redirect()->route('admin.role.index')->with('error', 'Cannot delete role. It is assigned to users.');
        }

        $role->delete();

        return redirect()->route('admin.role.index')->with('success', 'Role deleted successfully.');
    }
}
