<?php

namespace App\Http\Controllers;

use App\Models\leftmenu;
use App\Models\menu;
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
        //     $menuLeft =  DB::table('leftmenus')
        //     ->select('leftmenus.title','menus.id')
        //     ->join('menus','menus.id','=','leftmenus.menu_id')
        //     ->get();
        // return view('management.index', compact('menuLeft'));
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
            'title_menu' => ['required'],
            'headContent_menu' => ['required'],
            'content_menu' => ['required'],

        ]);



        $input = [
            'title_menu' => $request->title_menu,
            'headContent_menu' => $request->headContent_menu,
            'content_menu' => $request->content_menu,
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
        
            leftmenu::find($id)->update([
                'title_menu' => $request->title_menu,
                'headContent_menu' => $request->headContent_menu,
                'content_menu' => $request->content_menu,
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
