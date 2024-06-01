<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('Administrador')) {
            return view('admin.users.admin');
        }elseif ($user->hasRole('Vendedor')) {
            return view('admin.users.seller');
        };
    }
}
