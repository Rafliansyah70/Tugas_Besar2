<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\Factory;
use App\Models\Machine;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $userCount = User::count();
        view()->share('userCount', $userCount);

        $RoleCount = Role::count();
        view()->share('RoleCount', $RoleCount);

        $PermissionCount = Permission::count();
        view()->share('PermissionCount', $PermissionCount);

        $CategoryCount = Category::count();
        view()->share('CategoryCount', $CategoryCount);

        $SubCategoryCount = SubCategory::count();
        view()->share('SubCategoryCount', $SubCategoryCount);

        $CollectionCount = Collection::count();
        view()->share('CollectionCount', $CollectionCount);

        $ProductCount = Product::count();
        view()->share('ProductCount', $ProductCount);
        // Tambahkan perhitungan untuk Factory dan Machine
        $FactoryCount = Factory::count();
        view()->share('FactoryCount', $FactoryCount);

        $MachineCount = Machine::count();
        view()->share('MachineCount', $MachineCount);

        if (auth()->user()->role === 'adminA') {
            $FactoryCount = Factory::where('id', 1)->get();
            view()->share('FactoryCount', $FactoryCount->count());

            $machines = Machine::where('factory_id', 1)->get();
            view()->share('machines', $machines->count());
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
