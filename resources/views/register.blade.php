
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('loginform/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('loginform/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('loginform/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('loginform/css/iofrm-theme40.css')}}">
</head>
<body>
    <div class="form-body without-side">
        <div class="iofrm-layout">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside logo-normal">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-purple.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3 class="font-md">Are you new ? Create an account</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <form method="post" action="{{route('signup')}}">
                            @csrf
                            <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{old('name')}}" name="name" placeholder="Enter your full name" >
                            @error('name')
                               <span class="invalid-feedback">
                                   <strong>{{$message}}</strong>
                               </span>
                            @enderror
                            
                            <input class="form-control @error('username') is-invalid @enderror" type="text" value="{{old('username')}}" name="username" placeholder="Enter your username" >
                            @error('username')
                               <span class="invalid-feedback">
                                   <strong>{{$message}}</strong>
                               </span>
                            @enderror

                            <input class="form-control @error('mobile') is-invalid @enderror" type="phone" value="{{old('mobile')}}" name="mobile" placeholder="Enter your mobile" >
                            @error('mobile')
                               <span class="invalid-feedback">
                                   <strong>{{$message}}</strong>
                               </span>
                            @enderror
                            
                            <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{old('email')}}" name="email" placeholder="Your E-mail Address">
                            @error('email')
                               <span class="invalid-feedback">
                                   <strong>{{$message}}</strong>
                               </span>
                            @enderror
                            <input class="form-control @error('password') is-invalid @enderror" type="password" value="{{old('password')}}" name="password" placeholder="Password">
                            @error('password')
                               <span class="invalid-feedback">
                                   <strong>{{$message}}</strong>
                               </span>
                            @enderror
                            <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" value="{{old('password_confirmation')}}" name="password_confirmation" placeholder="Confirm Password">
                            @error('password_confirmation')
                               <span class="invalid-feedback">
                                   <strong>{{$message}}</strong>
                               </span>
                            @enderror
                            <div class="form-button d-flex align-items-center">
                                <button id="submit" type="submit" class="btn btn-primary">Signup Now</button>
                            </div>
                        </form>
                        <div class="other-links social-with-title">
                            <div class="text">Or login with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                        <div class="page-links">
                            <a href="{{route('website')}}">Signin to an existing acoount</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>


</html>