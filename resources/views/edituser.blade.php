<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
       <form method="post" action="{{route('logout')}}">
            @csrf
            <button class="btn btn-danger btn-sm" type="submit">Logout</button>
        </form>
        <a href="{{route('dashboard')}}" class="btn btn-outline-success btn-sm">back</a>
        <h5>{{$user->username}}</h5>
        
     <p>You are now editing {{$getuserinfo->name}}</p>
    
     <div class="container-fluid">
        <div class="row">
            
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        <div class="col-md-2"></div>

        </div>
     </div> 
</body>
</html>