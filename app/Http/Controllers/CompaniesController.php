<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $companies = DB::table('companies')->paginate(10);
      return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'email'=> 'nullable|email',
        'logo' => 'dimensions:min_width=100,min_height=100',
        'website' => 'nullable'
      ]);
      $logo = $request->file('logo');
      $filename = rand() . '.' . $logo->getClientOriginalExtension();
      $logo->move(storage_path('app/public'), $filename);
      $form_data = array(
         'name' => $request->name,
         'email' => $request->email,
         'logo' => $filename,
         'website' => $request->website
      );
      Company::create($form_data);
      return redirect('/companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
      return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
      return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
      $attributes = $request->validate([
        'name' => 'required|min:3',
        'email'=> 'nullable|email',
        'website' => 'nullable'
      ]);
      $company->update($attributes);
      return view('companies.show', compact('company'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
      $company->delete();
      return redirect('/companies');
    }
}
