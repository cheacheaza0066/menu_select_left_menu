@extends('layout.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="py-12">
        
        <div class="container">
            <div class="row mt-3" style="margin-left: 20px">
                
                <h1 class="text-center mb-3">อัพเดท มาตรฐาน</h1>

                <div class="col-md-12">
                    <a href="{{route('menuAll')}}" class="btn btn-primary my-2">กลับ</a>
                    {{-- <form action="{{route('menuAll')}}" method="get">
                        <button style="margin-left: 900px" type="submit" class="astext  fs-5 d-none d-sm-inline text-white navbar-brand text-white mb-0">
                            <span class="ms-1">MANAGEMENT</span></button>
                    </form> --}}

                    <div class="card">
                        <div class="card-header card text-white bg-success mb-1 showtext text-center">อัพเดท มาตรฐาน</div>
                        <div class="card-body">
                            <form action="{{url('/menu/update/'.$menu->id)}}" method="post" enctype="multipart/form-data">
    
                                @csrf

                                <div class="form-group">
                                    <label for="title">ชื่อมาตรฐาน</label>
                                    <textarea class="form-control" name="title" id="title" cols="30" rows="1">{{$menu->title}}</textarea>
                               @error('title')
                               <div class="my-1">
                               <span class="text-danger py-2">{{$message}}</span>
                               </div>
                               @enderror
                           </div>
           
                           <div class="form-group">
                               <label for="headContent">หัวข้อ</label>
                               <textarea class="form-control" name="headContent" id="headContent" cols="30" rows="1">{{$menu->headContent}}</textarea>
                          @error('headContent')
                          <div class="my-1">
                          <span class="text-danger py-2">{{$message}}</span>
                          </div>
                          @enderror
                      </div>
           
                           
           
                           <div class="form-group">
                               <label for="content">เนื้อหา</label>
                               <textarea class="form-control mb-3" name="content" id="content" cols="30" rows="7">{{$menu->content}}</textarea>
           
                              
                                   @error('content')
                                   <div class="my-1">
                                   <span class="text-danger py-2">{{$message}}</span>
                                   </div>
                                   @enderror
           
                               </div>
                                    <input type="submit" value="อัพเดท" class="btn btn-success btn-lg">
                                </div>
                               
                            </form>
                        </div>
                    </div>
           
                      
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection