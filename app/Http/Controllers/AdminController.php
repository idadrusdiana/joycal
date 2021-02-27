<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home(Request $request)
    {
        return view('admin.index');
    }

    public function responses()
    {
        $query = Response::query();

        return datatables()->of($query)->toJson();
    }

    public function changeStatus(Request $request, $id)
    {
        return Response::where('id', $id)->update(['status' => $request->status]);
    }
}
