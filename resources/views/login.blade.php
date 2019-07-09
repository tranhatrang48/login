<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
    <body style="background-color:#f1efefd8">
<div class="simulor">
    <div class="simulor-head">
 <div class="simulor-content">
 <h3>SIMULOR</h3>
 <p>Enter your email address and password to access admin panel.</p>
 </div>
<form action="{{route('login')}}" method="POST">
     @csrf
     <div class="form-group">
       <label for="">Email address</label>
       <input type="email" name="email"  class="form-control" placeholder="Enter your email" aria-describedby="helpId">
     </div>
     <div class="form-group">
       <label for="">Password</label>
       <input type="password" name="password" class="form-control" placeholder="Enter your password" aria-describedby="helpId">
     </div>
     <label for="" class="fa fa-check"  id="lbcheck">
     <input type="checkbox" name="check" id="check"></label>
     Remember me
     <br>
     <input type="submit" value="Log In" class="btn">
 </form>

    </div>
    <div class="simulor-footer">
            <a href="#" style="color:black">Forgot your password?</a><br>
            <p>Don't have an account? <a href="/signup" style="color:black">Sign up</a></p>
    </div>
</div>
     <script>
              $(document).ready(function(){
                $('#check').click(function(){
                    if(!$(this).is(':checked')){
                    $('#lbcheck').removeClass('chkbox')}
                    else{
                    $('#lbcheck').addClass('chkbox')
                    }
                })
              })
        </script>
    </body>
</html>
    