<?php

namespace App\Http\Controllers;

use App\Models\leftmenu;
use App\Models\menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = menu::paginate(5);
        $menuLeft = leftmenu::paginate(5);           
           
        // return view('management.index',compact('menu'));
        return view('management.index')->with([
            'menu' => menu::paginate(5),
            'menuLeft' => leftmenu::paginate(5),
           


        ]);
    }



    public function detail($id){
        $data = menu::find($id);
        return view('detailMenu',compact('data'));
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

      
          
            $input =[
                'title' => $request->title,
                'headContent' => $request->headContent,
                'content' => $request->content,
                'created_at' =>Carbon::now()
            ];
            
            // menu::insert($input); 
            DB::table('menus')->insert($input);

            return redirect()->back()->with('success',"เพิ่มข้อมูลเรียบร้อย");

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
        $menu = menu::find($id);
        return view('management.edit',compact('menu'));
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
            menu::find($id)->update([
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
        $delete = menu::find($id)->delete();
        return redirect()->back()->with('delete','ลบข้อมูลเรียบร้อย');
    }
}
