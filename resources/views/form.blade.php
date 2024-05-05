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
    
    <form action="{{url('/')}}/register" method="post">
        @csrf
        @php
            $demo=1;
        @endphp
        {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
        </pre> --}}
        <div class="container"> 
            <h1 class="text-center">Registration</h1>
            <x-input type="text" name="name" label="Please enter your name" :demo="$demo" />
            <x-input type="email" name="email" label="Please enter your email"/>
            <x-input type="password" name="password" label="Please enter your password"/>
            
            {{-- <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control" value="{{old('name')}}"/>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>    --}}
            {{-- <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" value="{{old('email')}}"/>
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control" />
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div> --}}
            <button class="btn btn-primary">Submit</button>
        </div> 
    </form> 
</body>
</html>