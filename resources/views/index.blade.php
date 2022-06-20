@extends('layout.index')
@section('content')
      <div class="band mt-5">
       @foreach($menu as $row)
       <div class="item">
        <a href="{{url('App/'.$row->id)}}" class="card">
          <div class="thumb" style="background-color: #AEDBCE">
            <h2 class="ms-2 mt-3 text-dark">{{$row->title}}</h2>
          </div>
        </a>
    </div>
       @endforeach

       {{-- <div class="item">
        <a href="{{route('app1')}}" class="card">
          <div class="thumb" style="background-color: #D3EBCD">
            <h2 class="ms-2 mt-3 text-dark">มาตรฐานที่ 1</h2>
          </div>
        </a>
    </div> --}}
    {{-- <div class="item">
      <a href="{{route('app2')}}" class="card">
        <div class="thumb" style="background-color: #AEDBCE">
          <h2 class="ms-2 mt-3 text-dark">มาตรฐานที่ 2</h2>
        </div>
      </a>
    </div>
    <div class="item">
      <a href="{{route('app3')}}" class="card">
        <div class="thumb" style="background-color: #839AA8">
          <h2 class="ms-2 mt-3 text-dark">มาตรฐานที่ 3</h2>
        </div>
      </a>
    </div>
    <div class="item">
      <a href="{{route('app4')}}" class="card">
        <div class="thumb" style="background-color: #635666">
          <h2 class="ms-2 mt-3 text-white">มาตรฐานที่ 4</h2>
        </div>
      </a>
    </div>
      
      <div class="item">
        <a href="{{route('app5')}}" class="card">
          <div class="thumb" style="background-color: #3C2C3E">
            <h2 class="ms-2 mt-3">มาตรฐานที่ 5</h2>
          </div>
        </a>
    </div>
    <div class="item">
      <a href="{{route('app6')}}" class="card">
        <div class="thumb" style="background-color: #4B5D67">
          <h2 class="ms-2 mt-3">มาตรฐานที่ 6</h2>
        </div>
      </a>
    </div>
    <div class="item">
      <a href="{{route('app7')}}" class="card">
        <div class="thumb" style="background-color: #94B49F">
          <h2 class="ms-2 mt-3 text-dark">มาตรฐานที่ 7</h2>
        </div>
      </a>
    </div>
    <div class="item">
      <a href="{{route('app8')}}" class="card">
        <div class="thumb" style="background-color: #BDF2D5">
          <h2 class="ms-2 mt-3 text-dark">มาตรฐานที่ 8</h2>
        </div>
      </a>
    </div> --}}
  
@endsection
