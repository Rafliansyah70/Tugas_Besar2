<?php

// namespace App\Http\Controllers\Admin;

// use App\Models\Machine;
// use App\Models\Factory;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

// class adminAController extends Controller
// {
//     // Constructor untuk membatasi akses hanya bagi adminA
//     public function __construct()
//     {
//         $this->middleware('auth'); // Pastikan user sudah terautentikasi
//     }

//     // Display a listing of the machines
//     public function index()
//     {
//         // Cek apakah user memiliki role 'adminA'
//         if (auth()->user()->role === 'adminA') {
//             // Hanya ambil data mesin yang memiliki factory_id = 1
//             $machines = Machine::where('factory_id', 1)->with('factory')->get();
//         } else {
//             // Jika bukan adminA, ambil semua data mesin
//             $machines = Machine::with('factory')->get();
//         }

//         return view('admin.machine.index', compact('machines'));
//     }

//     // Show the form for creating a new machine
//     public function create()
//     {
//         // Ambil semua data factory untuk keperluan form pembuatan mesin
//         $factories = Factory::all();
//         return view('admin.machine.create', compact('factories'));
//     }

//     // Store a newly created machine in the database
//     public function store(Request $request)
//     {
//         $request->validate([
//             'factory_id' => 'required|exists:factories,id',
//             'name' => 'required|string|max:255',
//             'status' => 'required|in:working,non_working,repairing',
//         ]);

//         Machine::create($request->all());

//         return redirect()->route('admin.machine.index')->with('success', 'Machine created successfully.');
//     }

//     // Display the specified machine
//     public function show(Machine $machine)
//     {
//         return view('admin.machine.show', compact('machine'));
//     }

//     // Show the form for editing the specified machine
//     public function edit(Machine $machine)
//     {
//         // Ambil data factory untuk keperluan form edit mesin
//         $factories = Factory::all();
//         return view('admin.machine.edit', compact('machine', 'factories'));
//     }

//     // Update the specified machine in the database
//     public function update(Request $request, Machine $machine)
//     {
//         $request->validate([
//             'factory_id' => 'required|exists:factories,id',
//             'name' => 'required|string|max:255',
//             'status' => 'required|in:working,non_working,repairing',
//         ]);

//         $machine->update($request->all());

//         return redirect()->route('admin.machine.index')->with('success', 'Machine updated successfully.');
//     }

//     // Remove the specified machine from the database
//     public function destroy(Machine $machine)
//     {
//         $machine->delete();

//         return redirect()->route('admin.machine.index')->with('success', 'Machine deleted successfully.');
//     }
// }