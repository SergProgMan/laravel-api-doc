<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of all Users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return response($users,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created User in storage.
     * 
     * @bodyParam user_name string required The name of the User.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_name'=> 'required|string'
        ]);

        $user = new User();
        $user->user_name = $request->user_name;

        $user->save();

        return response($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified User in storage.
     *
     * @bodyParam user_name string required The name of the User.
    // * @bodyParam company_name string optional The name of the Company to atach.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'user_name'=> 'required|string',
            'company_name' => 'string'
        ]);

        $user->update($request->all());
        if($user->save()){
            // $company = \App\Company::where('company_name', $request->company_name)->firstOrFail();
            // $user->companies()->sync($company);
        }

        return response($user, 200);
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user -> delete();

        return response(204);
    }

        /**
     * Get the specified User's companies.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function companies(User $user)
    {
        $companies = $user->companies;

        return response($companies, 200);
    }
}
