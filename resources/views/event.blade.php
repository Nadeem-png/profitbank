<!doctype html>
<html>
<head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
    <style>
        *{
            margin:0;
            padding:0;
            font-family:sans-serif;
        }
        .a1{
                color: white;
            }

            .a1:hover{
                color: lightcyan;
            }
            .navbar-nav{
            
            z-index:1000;
            background-color:#0b5262;
            }
           .navbar-collapse{
            
            z-index:1000;
        
            }
            .bg-contact{
                background-color:#d8e8ec;
            }
            h1{
                color:#0f6a7d;
            }
            footer{
                height: auto;
                background-color: #1b4b72;
            }
           .div4{
            height: auto;
                background-color: #003345;
            }
            .btn2{
                background-color:white;
                color:#0a768f;
                border:1px solid #989898;
             
            }
            .btn2:hover{

            border-left:4px solid #0a768f;
            color:#0a768f;
            text-decoration:none;
            }
            </style>
        </head>
        <body>
        <nav class="navbar nav1   navbar-expand-lg" style="height: 70px;background-color:#0b5262">
<div class="w-25">
        <a href="/" class="navbar-brand">
            <img src="{{asset('image/project2.jpg.png')}}" class="img-fluid w-50 h-50" style="margin-left:185px">
        </a>
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars text-white"></i></button>
    
    <div class="navbar-collapse  collapse" id="mynav">
        <ul class="navbar-nav  ">
        <li class="nav-item" @yield('nava')>
                    <a href="/" class="nav-link a1 ml-5 font-weight-bold">Home</a>
                </li>
            <li class="nav-item" @yield('nava')>
                <a href="/about" class="nav-link a1 ml-5 font-weight-bold">About</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="/blog" class="nav-link a1 ml-5 font-weight-bold">Blog</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="/event" class="nav-link a1 ml-5 font-weight-bold">Event</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="/contact" class="nav-link a1 ml-5 font-weight-bold">contact</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="/faq" class="nav-link a1 ml-5 font-weight-bold">FAQ</a>
            </li>



        </ul>
    </div>
</nav>
<div class="bg-contact">
<h1 class="text-center p-4  w-100">Events</h1>
</div>
<div class="container">
<div class="card">
<div class="card-header">
<ul class="nav nav-tabs card-header-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#upcoming">Upcoming</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#past">Past</a>
    </li>
</div>
<div class="tab-content">
    <div id="upcoming" class="container tab-pane active"><br>
    <div class="row">
    <div class="col-3 text-center">
    <p>Fri</p>
    <h6>18</h6>
    <span class="bg-warning rounded-pill">Today</span>
    </div>
    <div class="col-7">
    <div class="card-text">
    <h3>DAOventures-Quiz & AMA</h3>
    <p>Fri 18th.jun, 7:00 PM</p>
    <h6>DAOventures</h6>
    </div>
    </div>
    <div class="col-2">
  <i class="fa fas-share"></i>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-3 text-center">
    <p>Fri</p>
    <h6>18</h6>
    <span class="bg-warning rounded-pill">Today</span>
    </div>
    <div class="col-7">
    <div class="card-text">
    <h3>DAOventures-Quiz & AMA</h3>
    <p>Fri 18th.jun, 7:00 PM</p>
    <h6>DAOventures</h6>
    </div>
    </div>
    <div class="col-2">
  <i class="fa fas-share"></i>
    </div>
    </div>
    </div>
    
    <div id="past" class="container tab-pane fade"><br>
    <div class="row">
    <div class="col-3 text-center">
    <p>Fri</p>
    <h6>18</h6>
    <span class="bg-warning  rounded-pill">Today</span>
    </div>
    <div class="col-7">
    <div class="card-text">
    <h3>DAOventures-Quiz & AMA</h3>
    <p>Fri 18th.jun, 7:00 PM</p>
    <h6>DAOventures</h6>
    </div>
    </div>
    <div class="col-2">
  <i class="fa fas-share"></i>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-3 text-center">
    <p>Fri</p>
    <h6>18</h6>
    <span class="bg-warning  rounded-pill">Today</span>
    </div>
    <div class="col-7">
    <div class="card-text">
    <h3>DAOventures-Quiz & AMA</h3>
    <p>Fri 18th.jun, 7:00 PM</p>
    <h6>DAOventures</h6>
    </div>
    </div>
    <div class="col-2">
  <i class="fa fas-share"></i>
    </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-3 text-center">
    <p>Fri</p>
    <h6>18</h6>
    <span class="bg-warning  rounded-pill">Today</span>
    </div>
    <div class="col-7">
    <div class="card-text">
    <h3>DAOventures-Quiz & AMA</h3>
    <p>Fri 18th.jun, 7:00 PM</p>
    <h6>DAOventures</h6>
    </div>
    </div>
    <div class="col-2">
  <i class="fa fas-share"></i>
    </div>
    </div>
    </div>
    </div>
</div>

</div>
<footer class="footer" >
<div class="container container-sm">
<div class="row mt-5">
    <div class="col-lg col-xs-12 col-sm-12 col-md-6">
        <img src="{{asset('image/project2.jpg.png')}}" alt="" class="mt-2" style="height: 150px">
    </div>
    <div class="col-lg col-xs-12 col-sm-12 col-md-6 mb-2">
        <h4 class=" text-white mt-5 ml-5 mb-4">Connect with us:</h4>

        <a href="" class="ml-5 mt-4">
            <i class="fab fa-telegram-plane text-white" style="font-size: 25px"></i>
        </a>

        <a href="" class="ml-4 mt-4">
            <i class="fab fa-discord text-white" style="font-size: 25px"></i>
        </a>

        <a href="" class="ml-4 mt-4">
            <i class="fab fa-facebook-f text-white" style="font-size: 25px"></i>
        </a>

        <a href="" class="ml-4 mt-4">
            <i class="fab fa-instagram text-white" style="font-size: 25px"></i>
        </a>

        <a href="" class="ml-4 mt-4">
            <i class="fab fa-linkedin-in text-white" style="font-size: 25px"></i>
        </a>

        <a href="" class="ml-4 mt-4">
            <i class="fab fa-medium-m text-white" style="font-size: 25px"></i>
        </a>

       
    </div>
</div>
</div>
</footer>
                      <div class="div4">
                        <div class="container container-sm">
                        <div class="row mx-auto">
                        <div class="col-8 col-sm-12 col-md py-3">
                        <a href="" class="text-white mr-2">About</a>
                        <a href="" class="text-white mr-2">Term & Condition</a>
                        <a href="" class="text-white mr-2">FAQ</a>
                        <a href="" class="text-white">Contact</a>
                        </div>
                        <div class="col-4 col-sm-12 col-md py-3 ">
                        <h6 class="text-white">&copy;2021 ProfitBank</h3>
                        </div>
                        </div>
                        </div>
                        </div>
        </body>
        </html>
        
