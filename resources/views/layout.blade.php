<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @if (App::isLocale('en')) 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    @else
        <!-- compiled and minified CSS -->
<link 
rel="stylesheet"
href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj"
crossorigin="anonymous">
<!-- compiled and minified theme CSS -->
<link
rel="stylesheet"
href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
integrity="sha384-YNPmfeOM29goUYCxqyaDVPToebWWQrHk0e3QYEs7Ovg6r5hSRKr73uQ69DkzT1LH"
crossorigin="anonymous">

<!-- compiled and minified JavaScript -->
<script
src="https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv"
crossorigin="anonymous"></script>
    @endif

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url('FEQ/en') }}">English</a></li>
                    <li><a href="{{ url('FEQ/dr') }}">دری</a></li>
                    <li><a href="{{ url('FEQ/ps') }}">پشتو</a></li>
                  </ul>
                </li>
            </ul>
                <ul id="sign" class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul>
         
      </nav>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>