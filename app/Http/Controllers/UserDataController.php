<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $userData = UserData::latest()->paginate(5);
  
        return view('userData.index',compact('userData'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('userData.create');
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


        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required'
        ]);
  
        UserData::create($request->all());
   
        return redirect()->route('userData.index')
                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $userData = UserData::find($id);
        return view('userData.show',compact('userData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        $userData = UserData::find($id);
        return view('userData.edit',compact('userData','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //


        $userData = UserData::find($id);
        $userData->name = request('name');
        $userData->email = request('email');
        $userData->mobile = request('mobile');
        $userData->address = request('address');
        $userData->save();
              
  
        return redirect()->route('userData.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserData $userData)
    {
        //

        UserData::find($id)->delete();
  
        return redirect()->route('userData.index')
                        ->with('success','User deleted successfully');
    }
}
