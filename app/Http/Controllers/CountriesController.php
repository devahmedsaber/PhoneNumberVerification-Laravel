<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        Country::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('countries.index')->with('success', 'Country Added Successfully.');
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
        $country = Country::find($id);

        if (!$country){
            return redirect()->route('countries.index')->with('error', 'Country Does Not Exist.');
        }

        return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, $id)
    {
        $country = Country::find($id);

        if (!$country){
            return redirect()->route('countries.index')->with('error', 'Country Does Not Exist.');
        }

        $country->update([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('countries.index')->with('success', 'Country Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);

        if (!$country){
            return redirect()->route('countries.index')->with('error', 'Country Does Not Exist.');
        }

        $country->delete();

        return redirect()->route('countries.index')->with('success', 'Country Deleted Successfully.');
    }
}
