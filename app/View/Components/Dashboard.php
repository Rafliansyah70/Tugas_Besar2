<?php

namespace App\View\Components;

use Spatie\Permission\Models\Role;
use App\Models\Factory;
use App\Models\Machine; // Tambahkan model Machine
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Carbon\Carbon;

class Dashboard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $user = User::count();
        view()->share('user', $user);

        $category = Category::count();
        view()->share('category', $category);

        $product = Product::count();
        view()->share('product', $product);

        $collection = Collection::count();
        view()->share('collection', $collection);

        $role = Role::count();
        view()->share('role', $role);


        if (auth()->user()->role === 'superadmin') {

        $totalFactories = Factory::count();
        // Ambil data lokasi dan jumlah factory
        $factoriesByLocation = Factory::selectRaw('location, COUNT(*) as count')
            ->groupBy('location')
            ->get();

        // Menyebarkan data ke view
        view()->share('totalFactories', $totalFactories);
        // Menyebarkan data ke view
        view()->share('factoriesByLocation', $factoriesByLocation);




        // Data mesin berdasarkan lokasi
        $machinesByLocation = Machine::selectRaw('factories.location, count(*) as count')
            ->join('factories', 'factories.id', '=', 'machines.factory_id')
            ->groupBy('factories.location')
            ->get();

        // Total semua mesin
        $totalMachines = Machine::count();

        // Total mesin untuk factory_id = 1 (Jawa Barat)
        $totalMachinesForFactory1 = Machine::where('factory_id', 1)->count();

        // Data mesin berdasarkan status untuk factory_id = 1
        $machineStatusesForFactory1 = Machine::selectRaw('status, count(*) as count')
            ->where('factory_id', 1)
            ->groupBy('status')
            ->get();

        // Total mesin untuk factory_id = 1 (Jawa Tengah)
        $totalMachinesForFactory2 = Machine::where('factory_id', 2)->count();

        // Data mesin berdasarkan status untuk factory_id = 1
        $machineStatusesForFactory2 = Machine::selectRaw('status, count(*) as count')
            ->where('factory_id', 2)
            ->groupBy('status')
            ->get();

        // Menyebarkan data ke view
        view()->share('machinesByLocation', $machinesByLocation);
        view()->share('totalMachines', $totalMachines); // Total semua mesin
        view()->share('totalMachinesForFactory1', $totalMachinesForFactory1); // Total untuk factory_id = 1
        view()->share('machineStatusesForFactory1', $machineStatusesForFactory1); // Status untuk factory_id = 1
        view()->share('totalMachinesForFactory2', $totalMachinesForFactory2); // Total untuk factory_id = 1
        view()->share('machineStatusesForFactory2', $machineStatusesForFactory2); // Status untuk factory_id = 1
        }
        if (auth()->user()->role === 'adminA') {
            // Ambil data mesin untuk factory 1
            $machinesForFactory1 = Machine::where('factory_id', 1)->get();
            $machineStatusesForFactory1 = Machine::selectRaw('status, count(*) as count')
                ->where('factory_id', 1)
                ->groupBy('status')
                ->get();

            // Ambil data mesin berdasarkan tanggal created_at
            $machineCreatedAtData = Machine::selectRaw('DATE(created_at) as date, count(*) as count')
                ->where('factory_id', 1)
                ->groupBy('date')
                ->orderBy('date', 'asc') // Urutkan berdasarkan tanggal
                ->get();

            // Ambil data mesin berdasarkan tanggal updated_at
            $machineUpdatedAtData = Machine::selectRaw('DATE(updated_at) as date, count(*) as count')
                ->where('factory_id', 1)
                ->groupBy('date')
                ->orderBy('date', 'asc') // Urutkan berdasarkan tanggal
                ->get();

            // Menyebarkan data untuk adminA
            view()->share('machinesForFactory1', $machinesForFactory1);
            view()->share('totalMachinesForFactory1', $machinesForFactory1->count());
            view()->share('machineStatusesForFactory1', $machineStatusesForFactory1);
            view()->share('machineCreatedAtData', $machineCreatedAtData); // Menyebarkan data created_at
            view()->share('machineUpdatedAtData', $machineUpdatedAtData); // Menyebarkan data updated_at
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard');
    }
}