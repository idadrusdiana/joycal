<?php

namespace App\Http\Controllers;

use App\Models\StoreType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function home(Request $request, $store)
    {        
        $store = StoreType::where('store_type_en', $store)->firstOrFail();
        return view('public.form', compact('store'));
    }

    public function sendResponse(Request $request)
    {
        return DB::table('responses')->insert($request->all());
    }

    public function flat7Index(Request $request)
    {        
        return view('public.flat7.index');
    }

    public function sendResponseFlat7(Request $request)
    {
        return DB::table('responses')->insert($request->all());
    }
}
