<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
        <style>
            header{
                background: url("{{asset('image/g3.jpg')}}")
                no-repeat center;
                height:700px;
                background-size: cover;
            }
            .a1{
                color: white;
            }

            .a1:hover{
                color: lightcyan;
            }
        .b1{
            background-color: #1b4b72;
            color: white;
            }
        .b2{
            background-color: white;
            color: black;
            }
            .div{
                background-color: #1b4b72;
                
                height:auto;
                margin-bottom:20px;

            }

            .bor{
                border: 2px white;
                border-radius: 10px;
            }
            .bord{
                background-color: lightcyan ;
                border: 2px  #1b4b72;
                border-radius: 20px;
            }
            @media screen and (min-width: 320px) and (max-width: 480px){
    
}
        </style>


    </head>
      <body>






<header class="justify-content-center flex-column">

    <nav class="navbar navbar-expand-lg" style="height: 70px">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars"></i></button>
        <div class="w-25">
            <a href="/" class="navbar-brand">
                <img src="{{asset('image/project2.jpg.png')}}" class="img-fluid w-50 h-50" style="margin-left:185px">
            </a>
        </div>
        <div class="navbar-collapse collapse" id="mynav">
            <ul class="navbar-nav">
            <li class="nav-item" @yield('nava')>
                    <a href="/home" class="nav-link a1 font-weight-bold" style="margin-left: 100px">Home</a>
                </li>
                <li class="nav-item" @yield('nava')>
                    <a href="/about" class="nav-link a1 font-weight-bold" style="margin-left: 100px">About</a>
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

                <li class="nav-item" @yield('nava')>
                    <a href="/faq" class="nav-link a1 ml-5 font-weight-bold border py-2 px-4" style="border-color: white">LOGIN</a>
                </li>


            </ul>
        </div>
    </nav>
<div class="container">
<div class="row d-flex justify-content-left align-items-left d-column">
<div class="col-lg col-xs col-sm col-md">
<h1 class="text-white font-weight-bold p-4" style="font-size: 50px; margin-left: 200px; margin-top: 7%">
        The World’s First
       <br> Decentralized VC
    </h1>
    <h5 class="text-white mt-2 mb-5 text-center" style="margin-right: 500px">
        Discover new projects  |  Participate in Events  |  Investment Opportunities
     </h5>
 <div style="margin-top: 5%" >
    <span style="margin-left: 230px">
        <a href="" class="btn px-5 py-3 b1 font-weight-bold">Join our Telegram Group &nbsp; <i class="fab fa-telegram-plane text-white fa-2x"></i></a>
        <a href="" class="btn px-5 py-3 ml-2  b2 font-weight-bold">Gains Deck</a>
    </span>
 </div>
</div>
</div>
</div>
    
<div class="container-fluid">
    <div class="row div" style="height: 100px; margin-top: 100px ">
        <div class="col-lg col-xs-6 col-md-6 text-white text-center mt-3" style="font-size: 23px">30+ <br>Projects worked with</div>
        <div class="col-lg col-xs-6 col-md-6 text-white text-center mt-3" style="font-size: 23px">$3M+ <br>Raised for projects</div>
        <div class="col-lg col-xs-6 col-md-6 text-white text-center mt-3" style="font-size: 23px">10,000+ <br>Active members</div>
        <div class="col-lg col-xs-6 col-md-6 text-white text-center mt-3" style="font-size: 23px">20+ <br>Conferences attended</div>
    </div>
    </div>
</header>




<div class="div">
    <div class="container">
        <h1 class="text-center text-white">Gains Offers you</h1>
        <div class="row">
        <div class="col-lg col-sm-12 col-md-12 bg-white bor" style="height: 450px; margin-top: 100px;">
    <img src="{{asset('image/images.png')}}" alt="" class="img-fluid w-25 h-25 mt-5" style="margin-left: 130px">
        <h5 class="text-center text-dark mt-5">Insightes</h5>
        <p class="text-center text-dark">
            Find new, fun and interactive ways to learn more about crypto projects and blockchain thanks to our regular Telegram events, with the opportunity to earn rewards.
        </p>
</div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-lg col-sm-12 col-md-12 bg-white bor" style="height: 450px; width: 20%; margin-top: 100px">
        <img src="{{asset('image/c1.jpg')}}" alt="" class="img-fluid w-25 h-25 mt-5" style="margin-left: 130px">
        <h5 class="text-center text-dark mt-5">Events</h5>
        <p class="text-center text-dark">
            Being in crypto on your own can be overwhelming and risky. Exchange with experienced and well connected crypto enthusiasts about news, ideas, investment strategies and more.
         </p>
</div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-lg col-sm-12 col-md-12 bg-white bor" style="height: 450px; width: 20px; margin-top: 100px">
        <img src="{{asset('image/handship.jpg')}}" alt="" class="img-fluid w-25 h-25 mt-5" style="margin-left: 130px">
        <h5 class="text-center text-dark mt-5">Collabrition</h5>
        <p class="text-center text-dark">
            Don’t get lost in this continuous flow of complex information thanks to our synthetic daily reports. Our reviews and articles bring you to a deeper understanding of how crypto and blockchain work.
        </p>
</div>
 </div>
</div>
</div>



<h1 class="text-dark text-center" style="margin-top: 200px">Features</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col  bord" style="height: 150px">
            <div class="row">
                <div class="col-2 mt-4">
                    <i class="fas fa-volume-up fa-3x text-info mt-3"></i>
                </div>
                <div class="col-10">
                    <h4 class="mt-4">News</h4>
                    <p>
                        Stay up-to-date with the latest crypto headlines.    We post <br> daily curated news in an easy-to-read format.
                    </p>
                </div>
            </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col  bord" style="height: 150px">
            <div class="row">
                <div class="col-2 mt-4">
                    <i class="fas fa-envelope fa-3x text-info mt-3"></i>
                </div>
                <div class="col-10">
                    <h4 class="mt-4">AMA</h4>
                    <p>
                        Meet the founders of innovative crypto projects. Ask them anything about their work: from business strategy to tech development or marketing plans.
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="bor" style="height: 100px">

</div>






<div class="container mt-5">
    <div class="row">
        <div class="col  bord" style="height: 150px">
            <div class="row">
                <div class="col-2 mt-4">
                    <i class="fas fa-pen-square fa-3x text-info mt-3"></i>
                </div>
                <div class="col-10">
                    <h4 class="mt-4">Articles and reviews</h4>
                    <p>
                        We publish high quality articles about crypto and in-depth reviews of disruptive projects to help you understand the fundamentals at a deeper level.
                    </p>
                </div>
            </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col  bord" style="height: 150px">
            <div class="row">
                <div class="col-2 mt-4">
                    <i class="fas fa-signal fa-3x text-info mt-3"></i>
                </div>
                <div class="col-10">
                    <h4 class="mt-4">Investments</h4>
                    <p>
                        Register in our platform to manage your investments and access all the details about the best deals sourced from our global network of highly connected people.
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>


<footer class="" style="height: 180px;background-color: #1b4b72 " >

    <div class="row mt-5">
        <div class="col ml-5">
            <img src="{{asset('image/project2.jpg.png')}}" alt="" class="mt-2" style="height: 150px">
        </div>
        <div class="col">
            <h4 class="font-italic text-white mt-5 ml-5 mb-4">Connect with us:</h4>

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

            <a href="" class="ml-4 mt-4">
                <i class="fab fa-twitter text-white" style="font-size: 25px"></i>
            </a>

            <a href="" class="ml-4 mt-4">
                <i class="fab fa-youtube text-white" style="font-size: 25px"></i>
            </a>
        </div>
    </div>
</footer>






  </body>
    </html>
