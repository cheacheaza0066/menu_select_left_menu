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
                
                <h1 class="text-center mb-3">อัพเดท เมนู</h1>
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card text-white bg-success mb-1 showtext text-center">อัพเดท เมนู</div>
                        <div class="card-body">
                            <form action="{{url('/leftmenu/update/'.$leftmenu->id)}}" method="post" enctype="multipart/form-data">
    
                                @csrf

                                <div class="form-group">
                                    <label for="title">ชื่อเมนู</label>
                                    <textarea class="form-control" name="title" id="title" cols="30" rows="1">{{$leftmenu->title}}</textarea>
                               @error('title')
                               <div class="my-1">
                               <span class="text-danger py-2">{{$message}}</span>
                               </div>
                               @enderror
                           </div>
           
                           <div class="form-group">
                               <label for="headContent">หัวข้อ</label>
                               <textarea class="form-control" name="headContent" id="headContent" cols="30" rows="1">{{$leftmenu->headContent}}</textarea>
                          @error('headContent')
                          <div class="my-1">
                          <span class="text-danger py-2">{{$message}}</span>
                          </div>
                          @enderror
                      </div>
           
                           
           
                           <div class="form-group">
                               <label for="content">เนื้อหา</label>
                               <textarea class="form-control mb-3" name="content" id="content" cols="30" rows="7">{{$leftmenu->content}}</textarea>
           
                              
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