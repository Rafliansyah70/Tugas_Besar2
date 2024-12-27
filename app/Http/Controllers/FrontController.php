<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    public function index()
    {

        return view('welcome');
    }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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