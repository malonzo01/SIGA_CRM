<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DatatableController extends Controller
{
    public function users() {
        $users=User::select(["id","name", "email","created_at"])->orderBy("created_at")->get();

        return DataTables::collection($users)->toJson();
    }
}
