<!doctype html>
<html>
<head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
<h1 class="text-center p-4  w-100">Contact Us</h1>
</div>


<div class="container container-sm mt-5 py-3">
<div data-aos="fade-up"
     data-aos-duration="3000">
     <div class="row">
      <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 mt-2">
    <h1 class="mb-3" style="margin-top: 100px">Get in touch</h1>
        <h6>Tell us about your projects, we are excited <br> to hear from you</h6>
      </div>
   
     <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 div3">
        <form action="" class="container mb-5 mt-4">
            <label class="font-weight-bold text-dark">Full Name:</label>
            <input type="text" placeholder="Full Name..." class="form-control">

            <label class="text-dark font-weight-bold">Email:</label>
            <input type="email" placeholder="Email..." class="form-control">

            <label class="font-weight-bold text-dark">Your Message:</label>
            <textarea type="text" placeholder="Your Message" class="form-control" rows="5" style="resize: none"></textarea>

            <a href="" class="btn  mt-3 py-2 px-4 btn-primary ">Send Massege</a>
        </form>


</div>
    </div>

</div>
</div>
<hr>
<p class="py-4 text-center">
You can also reach us at
<a href=""> info@profitbank.io
</a></p>
<footer class="footer" >
<div class="container container-sm">
<div class="row mt-5">
    <div class="col-lg col-xs-12 col-sm-12 col-md-6">
        <img src="{{asset('image/project2.jpg.png')}}" alt="" class="mt-2" style="height: 150px">
    </div>
    <div class="col-lg col-xs-12 col-sm-12 col-md-6">
        <h4 class=" text-white mt-5 ml-5 mb-4">Connect with us:</h4>

        <a href="" class="ml-5  mb-2 mt-4">
            <i class="fab fa-telegram-plane text-white" style="font-size: 25px"></i>
        </a>

        <a href="https://twitter.com/profitbankcoin?s=20" class="ml-4  mb-2 mt-4">
            <i class="fab fa-twitter text-white" style="font-size: 25px"></i>
        </a>

        <a href="" class="ml-4  mb-2 mt-4">
            <i class="fab fa-facebook-f text-white" style="font-size: 25px"></i>
        </a>

        <a href="https://instagram.com/profitbankcoin?utm_medium=copy_link" class="ml-4  mb-2 mt-4">
            <i class="fab fa-instagram text-white" style="font-size: 25px"></i>
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
                        <script>
  AOS.init();
</script>
        </body>
        </html>
        
