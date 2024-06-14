<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="{{asset('css/login.css')}} ">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #ff3300;
	  }
	  </style>
  
</head>

<body>

<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Login Form</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2>Login to your account</h2>
     @error('login')
 <span style="color:red;">{{$message}}</span>
    @enderror 
	  
    <form action="/user/signIn" method="post">
        @csrf
      <input type="text" placeholder="Username" value="{{old('uname')}}" name="uname"/>
      @error('uname')
 <span style="color:red;">{{$message}}</span>
    @enderror
      <input type="password" placeholder="Password" name="password"/>
      @error('password')
 <span style="color:red;">{{$message}}</span>
    @enderror
      <input type="submit" id="buttn" name="submit" value="login" />
    </form>
  </div>
  
  <div class="cta">Not registered?<a href="/user/register" style="color:#f30;"> Create an account</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   



</body>

</html>
