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
    <h1>
        
        welcome {{$user->username}} to Dashboard 
    </h1>
    @if($user->role == 'admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-dark table-hover table-responsive">
                  <thead>
                     <th>Name</th>
                     <th>Username</th>
                     <th>Mobile</th>
                     <th>Email</th>
                     <th>Role</th>
                     <th>Date</th>
                     <th>Action</th>
                     <th></th>
                  </thead>
                  <tbody>
                     @foreach ($allusers as $value)
                         <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->username ?? 'Not Available'}}</td>
                            <td>{{$value->mobile ?? 'Not Available'}}</td>
                            <td>{{$value->email ?? 'not available'}}</td>
                            <td>{{$value->role ?? 'no row yet'}}</td>
                            <td>{{\Carbon\Carbon::parse($value->created_at)->diffForHumans() ?? 'no date yet'}}</td>
                            <th><a href="{{route('edituser',$value->id)}}" class="btn btn-info">edit</a></th>
                            <th><a href="#" class="btn btn-warning">delete</a></th>
                         </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
        </div>
     </div>
    @endif
     
</body>
</html>