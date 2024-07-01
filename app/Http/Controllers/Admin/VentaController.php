<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function index()
    {
        $users = User::pluck('name', 'id')->all();

        return view('admin.ventas.index',compact('users'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'user' => 'required',
            'startDate' => 'required',
            'endDate' => 'required'
        ]);

            $dateInit = Carbon::parse($request->startDate)->format('m/d/Y'); // Use Carbon for date formatting
            $dateFinal = Carbon::parse($request->endDate)->format('m/d/Y');

            $totalSales = User::select(DB::raw('users.name as user'), DB::raw('COUNT(plates.id) as plates_count'))
                ->join('plates', 'plates.user_id', '=', 'users.id')
                ->join('insurances', 'plates.insurance_id', '=', 'insurances.id')
                ->where('plates.user_id', $request->user)
                ->whereBetween('plates.date_issue', [$dateInit, $dateFinal])
                ->groupBy('users.name')
                ->get();

            $detailedSales = User::select(DB::raw('users.name as user'), DB::raw('insurances.name as insurance'), DB::raw('COUNT(plates.id) as plates_count'))
                ->join('plates', 'plates.user_id', '=', 'users.id')
                ->join('insurances', 'plates.insurance_id', '=', 'insurances.id')
                ->where('plates.user_id', $request->user)
                ->whereBetween('plates.date_issue', [$dateInit, $dateFinal])
                ->groupBy('insurances.name', 'users.name')
                ->get();

        return view('admin.ventas.show',compact('totalSales', 'detailedSales','dateInit','dateFinal'));
    }

}
