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
        // cara ketika di dalam form ada beberapa inputan dalam 1 field(contohnya ada phone1, phone2, phone3)
        $request->request->add(['phone_number' => $request->phone_number.'-'.$request->phone_number2.'-'.$request->phone_number3]);
        $request->request->add(['work_phone' => $request->work_phone.'-'.$request->work_phone2.'-'.$request->work_phone3]);
        $request->request->remove('work_phone2');
        $request->request->remove('work_phone3');
        
        $request->request->remove('phone_number2');
        $request->request->remove('phone_number3');
        // return $request->all();

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
