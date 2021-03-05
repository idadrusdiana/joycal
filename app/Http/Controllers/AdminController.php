<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('admin.index');
    }

    public function responses()
    {
        $range = request()->range;
        $range = explode(' - ', $range);        

        $query = Response::whereBetween('created_at', [$range[0], $range[1]])
        
        ->when(auth()->user()->role === 'store', function ($query) {
            return $query->where('store_id', auth()->user()->store_id);
        })
        ->when(request()->cluster, function ($query) {
            return $query->where('store_id', request()->cluster);
        });

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
