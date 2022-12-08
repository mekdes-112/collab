
<!DOCTYPE html>
<html lang="en">
@extends('layout.head')
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="/css/registration/registration_css.css" rel="stylesheet">
</head>

<body id="body">




  <section>
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 794.2 348.58">
      <defs>
        <style>
          .cls-1 {
            fill: #fff;
          }
        </style>
      </defs>
      <path class="cls-1"
        d="M-1.1,272.53a210.4,210.4,0,0,1,48.45-8.68c37.91-2.37,66.82,5.67,81.81,10,31.22,9,50.13,21.19,65.74,31.27,9.77,6.31,21.09,13.71,32.17,25.2,8.41,8.72,22.31,23.12,28,43,2.6,9.15,2.66,16.63,12.24,24.91a50.07,50.07,0,0,0,19.23,10.71c21.38,6.35,37-4,79.72-6.08,20.45-1,34.9-1.71,47.55,3.91,8.73,3.88,14.1,11.48,24.48,26.5,14.3,20.71,12.68,24.07,21,27.37,13.25,5.26,33,2.91,53.85.43,16-1.9,20.89-4,30.07-2.17,9.82,2,19.3,7.51,24.48,13.9a30.23,30.23,0,0,1,2.79,4.34c7.37,12.87,4.28,17.76,9.09,23.46,7,8.25,24.13,10.66,28.68,11.3,21.66,3,30-5.52,44-1.74,17.46,4.71,13.42,20.44,28,22.59,11.56,1.7,16.67-7.84,39.86-10a95.73,95.73,0,0,1,28.68,1.73c4.15.91,18.21,4.09,28,12.6,5.11,4.46,7.38,8.93,10.16,14.41a65.32,65.32,0,0,1,4,10.35c2.62,9.3,3.22,27.23,0,50.16H-1.1Z"
        transform="translate(1.1 -263.42)" />
    </svg>
    
  </section>
 
  <nav id="logo">
    <img src="/css/registration/Group103.svg" alt="">
  </nav>
  
  <div class="center">
    <h4> SignUp</h4>
    <form  method="post" action="/register-user">
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
        
       @csrf
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label  id="enter" for="">Enter username </label>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
       
</div>
      <div class="txt_field">
        <input type="email" name="email" required>
        <span></span>
        <label  id="enter" for="">Enter email </label>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>

      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label id="enter" for="">Enter password</label>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
        
      </div>
      <div class="txt_field">
        <input type="password" name="cpassword" required>
        <span></span>
        <label id="enter" for="">Confirm password</label>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
        
      </div>
      
      
      <input type="submit" value="SignUp">
      <div class="signup_link">
        Already have an account? <a href="login">Log in</a>
      </div>
    </form>

  </div>

    <div>
    <img id="team"src="/css/registration/teamwork.svg" alt="">
  </div>   



  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>