<?php

namespace App\Http\Controllers;

use App\Bicycle;
use App\User;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bicycles = Bicycle::orderBy('id','asc')->paginate(15);
        return view('pages.bicycles.index',['bicycles'=>$bicycles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('id','asc')->get();
        return view('pages.bicycles.create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'brand'        => 'required',
            'model'        => 'required',
            'color'        => 'required',
            'price'        => 'required',
        ]);

        Bicycle::create([
            'user_id'        => $request->user_id,
            'brand'        => $request->brand,
            'model'        => $request->model,
            'color'        => $request->color,
            'price'        => $request->price,
        ]);
        return redirect('bicycles')->with('status','Bicycle created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function show(Bicycle $bicycle)
    {
        return view('pages.bicycles.show',['bicycle'=>$bicycle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Bicycle $bicycle)
    {
        $users = User::orderBy('id','asc')->get();
        return view('pages.bicycles.edit',['bicycle'=>$bicycle,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bicycle $bicycle)
    {
        $bicycle->update($request->all());
        return redirect('bicycles')->with('status','Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bicycle $bicycle)
    {
        $bicycle->delete();
        return redirect('bicycles')->with('status','Item deleted successfully!');
    }
}
