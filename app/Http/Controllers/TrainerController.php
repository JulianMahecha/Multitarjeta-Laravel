<?php

namespace Multitarjeta\Http\Controllers;

use Illuminate\Http\Request;
use Multitarjeta\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view("trainers.index", compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file= $request->file('avatar');
            $avname = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $avname);
        }

        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->avatar = $avname;
        $trainer->save();

        return 'saved';
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {   
        /* $trainer = Trainer::find($id); comentado, para utilizar implicit binding*/
        /* $trainer = Trainer::where('slug','=', $slug)->firstOrFail(); comentado para usar custom implicit binding*/
        return view('trainers.show', compact('trainer'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));

        if ($request->hasFile('avatar')) {
            $file= $request->file('avatar');
            $avname = time().$file->getClientOriginalName();
            $trainer->avatar = $avname;
            $file->move(public_path().'/images/', $avname);
        }

        $trainer->save();

        return redirect()->action('TrainerController@index');
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
