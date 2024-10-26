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
        <a  href="{{route('dashboard')}}" class="btn btn-outline-success btn-sm">back</a>
        <h5>{{$user->username ?? ''}}</h5>
        
     <p>You are now editing {{$getuserinfo->name}}</p>
       
     <div class="container-fluid">
        <div class="row">
            

        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form action="{{route('updateuser',$getuserinfo->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" value="{{$getuserinfo->name}}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" value="{{$getuserinfo->username}}"  name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Mobile</label>
              <input type="mobile" value="{{$getuserinfo->mobile}}" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Role</label>
              <input type="text" value="{{$getuserinfo->role}}" name="role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" value="{{$getuserinfo->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
              <button class="btn btn-sm btn-primary">Update</button>
          </form>
        </div>
        <div class="col-md-2"></div>

        </div>
     </div> 
</body>
</html>