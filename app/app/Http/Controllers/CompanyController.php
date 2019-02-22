<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Get a list of all Companies.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return response($companies, 200);
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
     * Store a newly created Company in storage.
     * 
     * @bodyParam company_name string required The name of the Company.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name'=> 'required|string'
        ]);

        $company = new Company();
        $company->company_name = $request->company_name;

        $company->save();

        return response($company, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified Company in storage.
     * 
     * @bodyParam company_name string required The name of the Company.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'company_name'=> 'required|string'
        ]);

        $company->update($request->all());
        $company->save();

        return response($company, 200);
    }

    /**
     * Remove the specified Company from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company -> delete();

        return response(204);
    }

    /**
     * Get the specified Company's users.
     * 
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function users(Company $company)
    {
        $users = $company->users;

        return response($users, 200);
    }
}
