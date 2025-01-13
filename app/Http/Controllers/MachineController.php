<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Factory;
use Illuminate\Http\Request;



class MachineController extends Controller
{



    public function index()
    {
        if (auth()->user()->role === 'adminA') {
            $machines = Machine::with('factory')->where('factory_id', 1)->get(); // Hanya mesin untuk factory_id 1
        } else {
            $machines = Machine::with('factory')->get(); // Semua mesin untuk superadmin
        }

        return view('admin.machine.index', compact('machines'));
    }



    // Show the form for creating a new machine
    public function create()
    {
        $factories = Factory::all(); // Retrieve all factories for selection
        return view('admin.machine.create', compact('factories'));
    }

    // Store a newly created machine in the database
    public function store(Request $request)
    {
        $request->validate([
            'factory_id' => 'required|exists:factories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|in:working,non_working,repairing',
        ]);

        Machine::create($request->all());

        return redirect()->route('admin.machine.index')->with('success', 'Machine created successfully.');
    }

    // Display the specified machine
    public function show(Machine $machine)
    {
        return view('admin.machine.show', compact('machine'));
    }

    // Show the form for editing the specified machine
    public function edit(Machine $machine)
    {
        $factories = Factory::all(); // Retrieve all factories for selection
        return view('admin.machine.edit', compact('machine', 'factories'));
    }

    // Update the specified machine in the database
    public function update(Request $request, Machine $machine)
    {
        $request->validate([
            'factory_id' => 'required|exists:factories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|in:working,non_working,repairing',
        ]);

        $machine->update($request->all());

        return redirect()->route('admin.machine.index')->with('success', 'Machine updated successfully.');
    }

    // Remove the specified machine from the database
    public function destroy(Machine $machine)
    {
        $machine->delete();

        return redirect()->route('admin.machine.index')->with('success', 'Machine deleted successfully.');
    }
}
