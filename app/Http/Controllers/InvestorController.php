<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index()
    {
        $investores = Investor::all();

        return view('investores.index', compact('investores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('investores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Investor::create($request->all());

        // return back()->with('message', 'item stored successfully');
        return Redirect::back()->withErrors(['msg' => $request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investor $Investor
     * @return \Illuminate\Http\Response
     */
    public function show(Investor $investor)
    {
        return view('investores.show', compact('investor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\investor $investor
     * @return \Illuminate\Http\Response
     */
    public function edit(Investor $investor)
    {
        return view('investores.edit', compact('investor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Investor $Investor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investor $investor)
    {
        $Investor->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investor $Investor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investor $Investor)
    {
        $Investor->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
