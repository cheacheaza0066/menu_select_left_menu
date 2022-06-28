@extends('layout.app')
@section('content')


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="px-3 pt-2 min-vh-100">
                <form action="{{route('home')}}" method="get">
                    <button type="submit" class="astext mb-3  ms- fs-5 d-none d-sm-inline text-white">
                        <i class="fa fa-chevron-circle-left ms-0" style="font-size:20px;color:rgb(255, 255, 255)">
                        </i><span class="ms-1">BACK</span></button>
                </form>
                <ul class="nav nav-pills flex-column mb-sm-auto mt-5 mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="my-2 ">
                        <a href="javascript:toggleDiv('div1');" style="text-decoration: inherit; color: inherit;">
                            <span class="text-white ms-3 fs-5"><b>มาตรฐานทั้งหมด</b></span>
                        </a>
                    </li>
                    <li class="my-2">
                        <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div2');">
                            <span class="text-white ms-3 fs-5"><b>เพิ่มมาตรฐาน</b></span>
                        </a> 
                    </li>
                    <li class="my-2">
                        <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div3');">
                            <span class="text-white ms-3 fs-5"><b>เมนูทั้งหมด</b></span>
                        </a> 
                    </li>
                    <li class="my-2">
                        <a style="text-decoration: inherit; color: inherit;"  href="javascript:toggleDiv('div4');">
                            <span class="text-white ms-3 fs-5"><b>เพิ่มเมนู</b></span>
                        </a> 
                    </li>
                    
                </ul>    
            </div>
        </div>

        {{-- มาตรฐานทั้งหมด --}}
        <div class="col py-3" style="background-color:#F0F8FF">
            
            <div class="toggle" id="div1">
                <div class="container">
                    <div class="row">
                        <h1 class="text-center my-3">มาตรฐานทั้งหมด</h1>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col"  style="width:50px" class="text-center">ไอดี</th>
                                <th scope="col"  style="width:150px" class="text-center">ชื่อมาตรฐาน</th>
                                <th scope="col"  style="width:300px" class="text-center">หัวข้อ</th>
                                <th scope="col" class="text-center">เนื้อหา</th>

                                <th scope="col"  style="width:50px" class="text-center">อัพเดท</th>
                                <th scope="col"  style="width:50px" class="text-center">ลบ</th>

                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $row)
                                <tr>
                                    <td class="p-3">{{$row->id}}</td>
                                    <td class="p-3">{{Str::limit($row->title,100)}}</td>
                                    <td class="p-3">{{Str::limit($row->headContent,100)}}</td>
                                    <td class="p-3">{{Str::limit($row->content,150)}}</td>

                                    <td class="p-3"><a href="{{url('/menu/edit/'.$row->id)}}" style="width: auto" class="btn btn-warning btn-sm">UPDATE</a></td>
                               
                                    <td class="p-3"><a href="{{url('/menu/delete/'.$row->id)}}" style="width: auto" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบข้อมูล ใช่ไหม ?')">DELETE</td>

                                  </tr>
                                @endforeach
                              
                            </tbody>
                          </table>
                          <div class="d-flex justify-content-center">
                            {{$menu->links();}}
                        </div>
                    </div>
                </div>
                    
             
            </div>
            
            {{-- เพิ่มมาตรฐาน --}}
            <div class="toggle" id="div2" style="display: none">
                <div class="container">
                    <div class="row">
                            <h1 class="text-center my-3">เเบบฟอร์มเพิ่มมาตรฐาน</h1>
                        <form action="{{route('menuAdd')}}" method="post" enctype="multipart/form-data">
                            @csrf
        
                        <div class="form-group">
                                 <label for="title">ชื่อมาตรฐาน</label>
                                 <textarea class="form-control" name="title" id="title" cols="30" rows="1"></textarea>
                            @error('title')
                            <div class="my-1">
                            <span class="text-danger py-2">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="headContent">หัวข้อ</label>
                            <textarea class="form-control" name="headContent" id="headContent" cols="30" rows="1"></textarea>
                       @error('headContent')
                       <div class="my-1">
                       <span class="text-danger py-2">{{$message}}</span>
                       </div>
                       @enderror
                   </div>
                        <div class="form-group">
                            <label for="content">เนื้อหา</label>
                            <textarea class="form-control mb-3" name="content" id="content" cols="30" rows="10"></textarea>
                                @error('content')
                                <div class="my-1">
                                <span class="text-danger py-2">{{$message}}</span>
                                </div>
                                @enderror
        
                        </div>
        
                            
                                <input type="submit" value="SUBMIT" class="btn btn-success btn-lg">
                            </div>
                           
                        </form>
        
                    </div>
                </div>
                            <div class="toggle" id="div3" style="display: none">
                                <div class="container">
                                    <div class="row">
                                        <h1 class="text-center my-3">เมนูทั้งหมด</h1>

                                        <table class="table table-bordered">
                                            <thead>
                                                <th scope="col"  style="width:50px" class="text-center">ไอดี</th>
                                                <th scope="col"  style="width:150px" class="text-center">ชื่อเมนู</th>
                                                <th scope="col"  style="width:300px" class="text-center">หัวข้อเมนู</th>
                                                <th scope="col" class="text-center">เนื้อหา</th>
                
                                                <th scope="col"  style="width:50px" class="text-center">อัพเดท</th>
                                                <th scope="col"  style="width:50px" class="text-center">ลบ</th>


                                                

                                            </thead>
                                            <tbody>
                                            <tr>
                                                @foreach ($leftmenu as $row)
                                                <tr>
                                                    <td class="p-3">{{$row->id}}</td>
                                                    <td class="p-3">{{Str::limit($row->title_menu,100)}}</td>
                                                    <td class="p-3">{{Str::limit($row->headContent_menu,100)}}</td>
                                                    <td class="p-3">{{Str::limit($row->content_menu,150)}}</td> 
            
                                                    <td class="p-3"><a href="{{url('/leftmenu/edit/'.$row->id)}}" style="width: auto" class="btn btn-warning btn-sm">UPDATE</a></td>
                                               
                                                    <td class="p-3"><a href="{{url('/leftmenu/delete/'.$row->id)}}" style="width: auto" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบข้อมูล ใช่ไหม ?')">DELETE</td>
                
                                                  </tr>
                                               
                                                @endforeach
                                               


                                                   
                                            </tr>
                                           
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center">
                                        {{$leftmenu->links();}}
                                    </div>
                                    </div>
                                </div>
                                       
                                
                            </div>

                        <div class="toggle" id="div4" style="display: none">
                            <div class="container">
                                <div class="row">
                                        <h1 class="text-center my-3">เเบบฟอร์มเพิ่มเมนู</h1>
                                    <form action="{{route('leftmenuAdd')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                    
                                    <div class="form-group">
                                             <label for="title_menu">ชื่อเมนู</label>
                                             <textarea class="form-control" name="title_menu" id="title_menu" cols="30" rows="1"></textarea>
                                        @error('title_menu')
                                        <div class="my-1">
                                        <span class="text-danger py-2">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="headContent_menu">หัวข้อเมนู</label>
                                        <textarea class="form-control" name="headContent_menu" id="headContent_menu" cols="30" rows="1"></textarea>
                                   @error('headContent_menu')
                                   <div class="my-1">
                                   <span class="text-danger py-2">{{$message}}</span>
                                   </div>
                                   @enderror
                               </div>
                                    <div class="form-group">
                                        <label for="content_menu">เนื้อหา</label>
                                        <textarea class="form-control mb-3" name="content_menu" id="content_menu" cols="30" rows="10"></textarea>
                                            @error('content_menu')
                                            <div class="my-1">
                                            <span class="text-danger py-2">{{$message}}</span>
                                            </div>
                                            @enderror
                    
                                    </div>
                    
                                        
                                            <input type="submit" value="SUBMIT" class="btn btn-success btn-lg">
                                        </div>
                                       
                                    </form>
                    
                                </div>
                        </div>                        
                        <div class="toggle" id="div5" style="display: none">
                            <div class="container">
                                <div class="row">
                                    <h4>มาตรฐานที่1</h4>
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">ไอดี</th>
                                            <th scope="col">ชื่อเมนู</th>
                                      
                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($menu as $row)
                                          <tr>
                                            <th scope="row"></th>
                                            <td colspan="2"></td>
                                        
                                          </tr>
                                        @endforeach  
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>

                </div>
             

 

             
        </div>


    </div>
</div>

@endsection
