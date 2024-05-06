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