<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .required label::after{
            content:" *";
            color:red;
        }
    </style>

</head>
<body class="bg-dark">
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
                         <a class="nav-link" href="{{url('/customer')}}" style="color:white">Customer</a>
                    </li>
                </ul>
            </div>
        </nav>  
    </div>
    {{-- <form action="{{$url}}" method="post"> --}}
    <form action="{{ url('/customer/submit') }}" method="post">

        @csrf 
        <div class="container mt-4 card p-3 bg-white"> 
            <h3 class="text-center text-primary">{{$title}}</h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control" value=" {{$customer->name}}" />
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email:</label>
                    <input type="text" name="email" id="" class="form-control" value=" {{$customer->email}}" />
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Password:</label>
                    <input type="password" name="password" id="" class="form-control" />
                    <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password:</label>
                    <input type="password" name="confirm_password" id="" class="form-control" />
                    <span class="text-danger">
                        @error('confirm_password')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <!-- Country -->
                <div class="form-group col-md-6">
                    <label for="country">Country:</label>
                    <input type="text" name="country" id="" class="form-control" value=" {{$customer->country}}"/>                     
                    
                </div>

                <!-- District -->
                <div class="form-group col-md-6">
                    <label for="district">District:</label>
                    <input type="text" name="district" id="" class="form-control"value=" {{$customer->district}}" />
                    
                </div>

                <!-- Address -->
                <div class="form-group col-md-6">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" value=" {{$customer->address}}"/>
                   
                </div>

                <!-- Gender -->
                <div class="form-group col-md-6">
                    <label>Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="M" {{ $customer->gender == 'M' ? 'checked' : ''}}>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="F" {{ $customer->gender == 'F' ? 'checked' : ''}}>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="O" {{ $customer->gender == 'O' ? 'checked' : ''}}>
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                    
                </div>

                <!-- Date of Birth -->
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{$customer->dob}}"/>
                    
                </div>
        </div> 
        <button class="btn btn-primary">Submit</button>
    </form> 
</body>
</html>