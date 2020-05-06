<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Restaurant::get();
        return view('restaurants.index',compact('restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Restaurant::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'zipCode' => $request['zipCode'],
            'town' => $request['town'],
            'country' => $request['country'],
            'description' => $request['description'],
            'review' => $request['review']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant,$id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.show',compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant,$id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.edit',compact('restaurant'));
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
        $resto = Restaurant::find($id);
        $resto->update([
            'name' => $request['name'],
            'address' => $request['address'],
            'zipCode' => $request['zipCode'],
            'town' => $request['town'],
            'country' => $request['country'],
            'description' => $request['description'],
            'review' => $request['review']
        ]);
        $resto->save();
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
