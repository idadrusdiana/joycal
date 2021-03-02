<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.account.index');
    }

    
    public function create(Request $request)
    {
        $this->validate($request,[
            'first_name'=> 'required',
            'last_name' =>'required',
            'name'      => 'required',
            'password'  => 'required',
            'password_confirm' => 'required|same:password',
            'store_id'  => 'required',
            'email'     => 'required|email'
        ]);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->role = 'store';
        $user->store_id = $request->store_id;
        $user->save();

        return back();
        // return redirect('/account');
        // $this->validate($request,[
        //     'first_name'=> 'required',
        //     'last_name' => 'required',
        //     'name'  => 'required',
        //     'store_type'  => 'required',
        //     'store_name' => 'required',
        //     'email'     => 'required|email|unique:CC',
        //     'agama'     => 'required',
        //     'alamat' => 'required'
            
        // ]);     
        // //insert ke table Response
        // $response   =   new Response();        
        // $response->first_name = $request->first_name;
        // $response->last_name = $request->last_name;
        // $response->name = $request->name;
        // $response->password = bcrypt('rahasia');
        
        // $response->store_type = $request->store_type;
        // $response->email    = $request->email;
        // // $response->save();

        // dd($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
