<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
@include('sweetalert::alert')

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
            <h2>Registered users</h2>
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
                            <th>
                                <form action="{{route('deleteuser',$value->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <!-- <button type="submit" class="btn btn-warning">Delete</button> -->
                                    <button class="btn btn-warning delete_users">Delete</button>
                                </form>
                                <!-- <a href="#" class="btn btn-warning" data-confirm-delete="true">delete</a> -->
                            </th>
                         </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Trashed users</h2>
                <table class="table table-dark table-hover table-responsive">
                  <thead>
                     <th>Name</th>
                     <th>Username</th>
                     <th>Mobile</th>
                     <th>Email</th>
                     <th>Role</th>
                     <th>Date</th>
                     <th></th>
                     <th>Action</th>
                     
                  </thead>
                  <tbody>
                     @foreach ($findusers as $value)
                         <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->username ?? 'Not Available'}}</td>
                            <td>{{$value->mobile ?? 'Not Available'}}</td>
                            <td>{{$value->email ?? 'not available'}}</td>
                            <td>{{$value->role ?? 'no row yet'}}</td>
                            <td>{{\Carbon\Carbon::parse($value->created_at)->diffForHumans() ?? 'no date yet'}}</td>
                            <td></td>  
                            <td>
                                <form action="{{route('restore_user',$value->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Restore</button>
                                </form>
                                <!-- <a href="#" class="btn btn-warning" data-confirm-delete="true">delete</a> -->
                            </td>
                         </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
        </div>
     </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $('.delete_users').click(function(event){
            event.preventDefault();
            Swal.fire({
              title: 'Are you sure you want to delete this record?',
              text: "You won't be able to revert this!",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                $(this).parent('form').trigger('submit')
                Swal.fire('Deleted Successfully', '', 'success')
              } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
              }});
        });
    </script>
</body>
</html>