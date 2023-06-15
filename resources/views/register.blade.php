<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    @livewireStyles
</head>
<body>
    
     <!--Navbar-->
     <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top ">
        <div class="container ">
            <a href="#" class="navbar-brand">Dominican College of Tarlac</a>

            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu"> 
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item">
                        <a href="#learn" class="nav-link">What You'll Learn</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="#register" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>       
    </nav>
    
    
    
    <div class="container">
        <div class="row" style="margin-top:80px">
              <div class="col-md-6 offset-md-3">
                  <h1>Registration Form</h1><hr>
                  @livewire('multi-step-form')
              </div>
        </div>
    </div>
     
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous">
    </script>
    @livewireScripts

</body>
</html>