<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = menu::all();
        return view('index',compact('menu'));
    }

    public function app1()
    {
        return view('app.app1');
    }
    public function app2()
    {
        return view('app.app2');
    }
    public function app3()
    {
        return view('app.app3');
    }
    public function app4()
    {
        return view('app.app4');
    }
    public function app5()
    {
        return view('app.app5');
    }
    public function app6()
    {
        return view('app.app6');
    }
    public function app7()
    {
        return view('app.app7');
    }
    public function app8()
    {
        return view('app.app8');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
