<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    // Menampilkan daftar factories
    public function index()
    {
        // $data = Factory::orderBy('id', 'DESC')->get();

        if (auth()->user()->role === 'adminA') {
            // Hanya data factory dengan factory_id 1 untuk adminA
            $data = Factory::where('id', 1)->get();
        } else {
            // Semua data factory untuk superadmin
            $data = Factory::all();
        }

        return view('admin.factories.index', compact('data'));
    }

    // Form untuk membuat factory baru
    public function create()
    {
        return view('admin.factories.create');
    }

    // Menyimpan factory baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Factory::create($request->all());
        return redirect()->route('admin.factories.index')->with('success', 'Factory created successfully.');
    }

    // Menampilkan detail factory berdasarkan ID
    public function show($id)
    {
        $factory = Factory::findOrFail($id);
        return view('admin.factories.show', compact('factory'));
    }

    // Form untuk mengedit factory
    public function edit($id)
    {
        $factory = Factory::findOrFail($id);
        return view('admin.factories.edit', compact('factory'));
    }

    // Memperbarui data factory
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $factory = Factory::findOrFail($id);
        $factory->update($request->all());

        return redirect()->route('admin.factories.index')->with('success', 'Factory updated successfully.');
    }

    // Menghapus factory
    public function destroy($id)
    {
        $factory = Factory::findOrFail($id);
        $factory->delete();

        return redirect()->route('admin.factories.index')->with('success', 'Factory deleted successfully.');
    }
}
