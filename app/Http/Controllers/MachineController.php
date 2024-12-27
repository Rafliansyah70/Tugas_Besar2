<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Factory;
use Illuminate\Http\Request;
use App\Charts\MachineChart; // Import the chart class


class MachineController extends Controller
{

    // public function dashboard(MachineChart $chart)
    // {
    //     // Generate chart
    //     $chartInstance = $chart->build(); // Generate chart with build()

    //     // Pass data to the view
    //     return view('components.dashboard', [
    //         'chart' => $chartInstance, // Send chart to view
    //         'user' => 100, // Example data for user count
    //         'category' => 50, // Example data for category count
    //         'product' => 150, // Example data for product count
    //         'collection' => 20, // Example data for collection count
    //     ]);
    // }
    // Display a listing of the machines


    public function index()
    {


        $machines = Machine::with('factory')->get(); // Retrieve all machines with related factory
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
