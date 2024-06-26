<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color:white">Sujan</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}" style="color:white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/register')}}" style="color:white">Register</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{url('/customer ')}}" style="color:white">Customer</a>
                        </li>
                    </ul>
                </div>
            </nav>  
        </div>
    </div>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container"> 
            <h1 class="text-center">Registration</h1>
            <x-input type="text" name="name" label="Please enter your name" />
            <x-input type="email" name="email" label="Please enter your email"/>
            <x-input type="password" name="password" label="Please enter your password"/>
            <button class="btn btn-primary">Submit</button>
        </div> 
    </form> 
</body>
</html>