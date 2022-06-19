<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
      <h2>Login</h2>
      
      <form action="{{route('home')}}" class="login-form">
        <div class="mb-3">
            <input  placeholder="Username" type="text" class="form-control input py-2" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <input placeholder="Password" type="password" class="form-control py-2" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn mt-3 p-2 text-white" style="background-color: #194e70">LOGIN</button>
        </form>
     
    </div>
      
    </body>
</html>