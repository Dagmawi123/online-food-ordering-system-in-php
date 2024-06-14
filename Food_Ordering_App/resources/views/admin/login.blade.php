<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="{{asset('css/adminCss/login.css')}}">

  
</head>

<body>

  
<div class="container">
  <div class="info">
    <h1>Administration </h1><span> login/register into admin Account</span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="{{asset('images/adminImages/manager.png')}}"/></div>
   @error('code')
  <span style="color:red;">{{$message}}</span>
  @enderror
  <form class="register-form" action="/adminstrator/register" method="post">
    @csrf
   
    <input type="text" placeholder="username" value="{{old('username')}}" name="username"/>
    @error('username')
  <span style="color:red;">{{$message}}</span>
  @enderror
    <input type="text" placeholder="email address" value="{{old('email')}}"  name="email"/>
    @error('email')
  <span style="color:red;">{{$message}}</span>
  @enderror
	 <input type="password" placeholder="password"   name="password"/>
   @error('password')
  <span style="color:red;">{{$message}}</span>
  @enderror
	  <input type="password" placeholder="Confirm password"  name="password_confirmation"/>
	  <input type="password" placeholder="Unique-Code" value="{{old('code')}}" name="code"/>
   <input type="submit"  name="submit1" value="Create" />
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <!-- <span>username:admin</span>&nbsp;<span>password:1234</span> -->
  <span style="color:red;"></span>
   <span style="color:green;"></span>
  <form class="login-form" action="/adminstrator/authenticate" method="post">
    @csrf
    <input type="text" placeholder="username" value="{{old('username')}}" name="username"/>
    @error('username')
  <span style="color:red;">{{$message}}</span>
  @enderror
    <input type="password" placeholder="password" name="password"/>
    @error('password')
  <span style="color:red;">{{$message}}</span>
  @enderror
    <input type="submit"  name="submit" value="login" />
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
  
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='{{asset('js/adminJs/index.js')}}'></script>
  

    



</body>

</html>
