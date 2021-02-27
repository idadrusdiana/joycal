<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function home(Request $request)
    {        
        return view('public.index');
    }

    public function sendResponse(Request $request)
    {
        return DB::table('responses')->insert($request->all());
    }
}
