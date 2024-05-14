<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    
        <div class=" top-0 end-0 p-3">
            <a href="{{url('/')}}" class="text-sm text-gray-700 underline">English</a>
            <a href="{{url('/ne')}}" class="text-sm text-gray-700 underline">Nepali</a>
            <a href="{{url('/ja')}}" class="text-sm text-gray-700 underline">Japanese</a>
        </div>
    
    
    
    
    

    <div class="d-flex align-items-center justify-content-center vh-100">
        <h1 class="display-1">@lang('messages.welcome')</h1>
    </div>
    
   </body>
</html>