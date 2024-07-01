<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use App\Models\Plates;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $plates= Plates::all();
        $users=User::all();
        $insurances=Insurance::all();

        $totalPlatesPerUser = User::withCount('plates')->get();

        $totalPlatesPerInsurance = Insurance::withCount('plates')->get();

        if ($user->hasRole('Administrador')) {
            return view('admin.users.admin', compact('plates','users','insurances','totalPlatesPerUser','totalPlatesPerInsurance'));
        }elseif ($user->hasRole('Vendedor')) {
            return view('admin.users.seller');
        };
    }

    public function show($id)
    {
        $user = User::find($id);
        $userPlatesPerInsurance = User::select(DB::raw('users.name as user'), DB::raw('insurances.name as insurance'),
                                        DB::raw('COUNT(plates.id) as plates_count'))
                                        ->join('plates', 'plates.user_id', '=', 'users.id')
                                        ->join('insurances', 'plates.insurance_id', '=', 'insurances.id')
                                        ->where('plates.user_id', $id)
                                        ->groupBy('insurances.name', 'users.name')
                                        ->get();

        return view('admin.dashboard.show', compact('userPlatesPerInsurance','user'));
    }


}
