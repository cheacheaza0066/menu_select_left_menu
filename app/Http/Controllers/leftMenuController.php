<?php

namespace App\Http\Controllers;

use App\Models\leftmenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class leftMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = leftmenu::paginate(5);
        return view('management.index', compact('menu'));
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
        $request->validate([
            'title' => ['required'],
            'headContent' => ['required'],
            'content' => ['required'],

        ]);



        $input = [
            'title' => $request->title,
            'headContent' => $request->headContent,
            'content' => $request->content,
        ];

        // menu::insert($input); 
        DB::table('leftmenus')->insert($input);

        return redirect()->route('menuAll')->with('success', "เพิ่มข้อมูลเรียบร้อย");
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
        $leftmenu = leftmenu::find($id);
        return view('management.leftEdit',compact('leftmenu'));
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
        $request->validate([
            'title' => ['required'],
            'headContent' => ['required'],
            'content' => ['required'],
            
        ]);
            leftmenu::find($id)->update([
                'title' => $request->title,
                'headContent' => $request->headContent,
                'content' => $request->content,
            ]);
            return redirect()->route('menuAll')->with('success',"อัพเดทเรียบร้อย");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = leftmenu::find($id)->delete();
        return redirect()->back()->with('delete','ลบข้อมูลเรียบร้อย');
    }
}
