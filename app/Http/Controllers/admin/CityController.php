<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\Country;
use App\model\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::get();
        $cities = City::get();
        $data = compact('countries', 'cities'); // Variable to array convert
        return view('backend.inc.city.city', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        $cities = City::get();
        $data = compact('countries', 'cities'); // Variable to array convert
        return view('backend.inc.city.city', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'record.name' => 'required|string|unique:mysql.countries,name|max:255',
        ];

        $messages = [
            'record.name.required'   => 'City Name is required.',
            'record.name.string'   => 'City Name contain only alphabets.',
            'record.name.unique'   => 'City Name is unique.',
            'record.name.max'   => 'City Name is max of 255 charcters.',
        ];

        $request->validate($rules, $messages);

        $city = new City($request->record);

        $city->slug = Str::slug($request->record['name'], '-');

        $city->save();

        return redirect(route('city.index'))->with('success', 'City successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $countries = Country::get();
        $cities = City::get();
        $data = compact('countries', 'cities', 'city'); // Variable to array convert
        return view('backend.inc.city.city', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $rules = [
            'record.name' => 'required|string|max:255|unique:mysql.countries,name,' . $city->id
        ];

        $messages = [
            'record.name.required'   => 'Country Name is required.',
            'record.name.string'   => 'Country Name contain only alphabets.',
            'record.name.unique'   => 'Country Name is unique.',
            'record.name.max'   => 'Country Name is max of 255 charcters.',
        ];

        $request->validate($rules, $messages);

        $cities = $request->record;

        $city->update($cities);

        return redirect(route('city.index'))->with('success', 'City successfully added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect(route('city.index'))->with('success', 'Country successfully Delete.');
    }
}
