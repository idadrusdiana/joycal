<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index');
    }

    public function responses()
    {
        $range = request()->range;
        $range = explode(' - ', $range);        

        $query = Response::whereBetween('created_at', [$range[0], $range[1]]);

        return datatables()->of($query)->toJson();
    }

    public function changeStatus(Request $request, $id)
    {
        return Response::where('id', $id)->update(['status' => $request->status]);
    }

    public function print($id)
    {
        return Response::findOrFail($id);
    }
}
