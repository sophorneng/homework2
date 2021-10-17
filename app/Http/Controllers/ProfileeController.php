<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profilee;
class ProfileeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Profilee::orderBy('pro_id', 'desc')->get();
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
            'city' => 'required',
            'user_id' => 'required',
            'image' => 'required|image|max:1999'
        ]);
        

        //move image to folder storage
        $request->file('image')->store('public/images');
        // $request->file('photo')->storeAs('public/images', $original);

        // insert to database
        $pro = new Profilee();
        $pro->city = $request->city;
        $pro->user_id = $request->user_id;
        $pro->image = $request->file('image')->hashName();

        $pro->save();

        return response()->json(['message' => 'profile saved succesfully'], 201);

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
        return Profilee::findOrFail($id);
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
        $request->validate([
            'city' => 'required',
            'user_id' => 'required',
            'image' => 'required|image|max:1999'
        ]);
        
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
        $pro = Profilee::destroy($id);
        if($pro == 1){
            return response()->json(['message' => 'delete succesfully'], 200);
        }else{
            return response()->json(['message' => 'cannot delete no id' ], 404);
        }
    }
}
