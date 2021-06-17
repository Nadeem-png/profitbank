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
        *{
            margin:0;
            padding:0;
            font-family:sans-serif;
        }
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
             .navbar-nav{
            
            z-index:1000;
            background-color:#0b5262;
            }
           .navbar-collapse{
            
            z-index:1000;
        
            }
            
            /* .row{
                disply:flex;
                justify-content:space-between;
                align-items:center;
                margin:120px 0px;
            }
            .col{
                flex-basis:40%;
                position:relative;
                margin-left:50px;
                color:white;
            }
            .col h1{
              font-size:30px;
              font-weight:100;
              margin:20px 0 10px;

            }
            .col h5{
                font-size:10px;
              font-weight:100;
              margin:20px 0 10px;

} */
.div{
                background-color: #1b4b72;
            
            }
            .div1{
                background-color: #1b4b72;
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
            footer{
                height: auto;
                background-color: #1b4b72;
            }
              .rank{
                background-color: #1b4b72;
                border: 2px #1b4b72;
                border-radius: 20px;
            }
            .div4{
            height: auto;
                background-color: #003345;
            }
            .blog{
                background-color: #1b4b72;
                margin-top: 100px;
                height:800px;
            }
             .div2{
                background-color: #1b4b72;
                border: 2px white;
                border-radius: 20px
            }
@media screen and (min-width: 320px) and (max-width: 767px){
.nav1{
background-color:white;
}
    
}
        </style>
        <body>
        
<header class="justify-content-center flex-column">

<nav class="navbar nav1  bg-dark navbar-expand-lg"style="height: 70px;background-color:#0b5262">
<div class="w-25">
        <a href="/" class="navbar-brand">
            <img src="{{asset('image/project2.jpg.png')}}" class="img-fluid w-50 h-50" style="margin-left:185px">
        </a>
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars text-white"></i></button>
    
    <div class="navbar-collapse   collapse" id="mynav">
        <ul class="navbar-nav  ">
        <li class="nav-item" @yield('nava')>
                    <a href="/home" class="nav-link a1 font-weight-bold" style="margin-left: 100px">Home</a>
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

            <li class="nav-item" @yield('nava')>
                <a href="/faq" class="nav-link a1 ml-5 font-weight-bold border py-2 px-4" style="border-color: white">LOGIN</a>
            </li>


        </ul>
    </div>
</nav>
<div class="container " style="margin-top:80px">
<div class="row d-flex justify-content-between align-items-center d-column text-white">
<div class="col">
<h1 class= "text-white font-weight-bold p-4">
 The World’s First <br> Decentralized VC
    </h1>
    <h5 class= "text-white font-weight-bold p-4">
        Discover new projects  |  Participate in Events  |  Investment Opportunities
     </h5>
     <a href="" class="btn btn-primary   px-5 py-3 b1 font-weight-bold">Join our Telegram Group &nbsp; <i class="fab fa-telegram-plane text-white fa-2x"></i></a>
        <a href="" class="btn btn-white bg-white px-5 py-3 ml-2  b2 font-weight-bold">Gains Deck</a>
 </div>
</div>
</div>


</header>
<div class="container-fluid">
    <div class="row div" >
        <div class="col-lg col-xs-6 lg col-sm-6  col-md-6 text-white text-center mt-3" style="font-size: 23px">30+ <br>Projects worked with</div>
        <div class="col-lg col-xs-6 col-sm-6 col-md-6 text-white text-center mt-3" style="font-size: 23px">$3M+ <br>Raised for projects</div>
        <div class="col-lg col-xs-6 col-sm-6 col-md-6 text-white text-center mt-3" style="font-size: 23px">10,000+ <br>Active members</div>
        <div class="col-lg col-xs-6 col-sm-6 col-md-6 text-white text-center mt-3" style="font-size: 23px">20+ <br>Conferences attended</div>
    </div>
    </div>
    <div class="container container-sm mt-5">
    <h1 class="text-center mb-5">Profit Bank Ranking System</h1>
    <div class="row mx-auto">
    <div class="col-6  col-lg-3 col-md-3 mb-4" >
    <div class="card p-3 rank">
    <div class="card-text text-white">
    <h4 class=" text-center mt-3">Tire 1</h4>
    <h5 class="text-center">PROFIT SILVER FISHES</h5>
    </div>
    <img src="{{asset('image/shark.jpg')}}" alt="" class="card-img rounded-circle">
<div class="card-text text-white mt-2">
<h5 class="text-center">10,000 PROFIT</h5>
                <h6 class="text-center">10% of allocations</h6>
</div>
    </div>

  
    </div>
    <div class="col-6  col-lg-3 col-md-3 mb-4" >
    <div class="card p-3 rank">
    <div class="card-text text-white">
    <h4 class=" text-center mt-3">Tire 2</h4>
    <h5 class="text-center">PROFIT SLEEK DOLPHINS</h5>
    </div>
    <img src="{{asset('image/shark.jpg')}}" alt="" class="card-img rounded-circle">
<div class="card-text text-white mt-2">
<h5 class="text-center">30,000 PROFIT</h5>
                <h6 class="text-center">15% of allocations</h6>
</div>
    </div>

  
    </div>
    <div class="col-6  col-lg-3 col-md-3" >
    <div class="card p-3 rank">
    <div class="card-text text-white">
    <h4 class=" text-center mt-3">Tire 3</h4>
    <h5 class="text-center">PROFIT BLUE<br> WHALE</h5>
    </div>
    <img src="{{asset('image/shark.jpg')}}" alt="" class="card-img rounded-circle">
<div class="card-text text-white mt-2">
<h5 class="text-center">200,000 PROFIT</h5>
                <h6 class="text-center">50% of allocations</h6>
</div>
    </div>

  
    </div>
    <div class="col-6  col-lg-3 col-md-3" >
    <div class="card p-3 rank">
    <div class="card-text text-white">
    <h4 class=" text-center mt-3">Tire 4</h4>
    <h5 class="text-center">PROFIT SLEEK DOLPHINS</h5>
    </div>
    <img src="{{asset('image/shark.jpg')}}" alt="" class="card-img rounded-circle">
<div class="card-text text-white mt-2">
<h5 class="text-center">100,000 PROFIT</h5>
                <h6 class="text-center">25% of allocations</h6>
</div>
    </div>

  
    </div>
    </div>
    
    </div>
    
    <div class="div1">
    <div class="container container-sm container-xs">

    <h1 class="text-center mt-5 text-white py-3" >Gains Offers you</h1>
        <div class="row">
        <div class="col-lg col-sm-12 col-md-12 bg-white mr-2 bor" style="height: 450px; width:100%; margin-top: 100px;">
    <img src="{{asset('image/images.png')}}" alt="" class="img-fluid w-25 h-25 mt-5" style="margin-left: 130px">
        <h5 class="text-center text-dark mt-5">Insightes</h5>
        <p class="text-center text-dark">
            Find new, fun and interactive ways to learn more about crypto projects and blockchain thanks to our regular Telegram events, with the opportunity to earn rewards.
        </p>
        </div>

        <div class="col-lg col-sm-12 col-md-12 bg-white mr-2 bor" style="height: 450px; width:100%; margin-top: 100px">
        <img src="{{asset('image/c1.jpg')}}" alt="" class="img-fluid w-25 h-25 mt-5" style="margin-left: 130px">
        <h5 class="text-center text-dark mt-5">Events</h5>
        <p class="text-center text-dark">
            Being in crypto on your own can be overwhelming and risky. Exchange with experienced and well connected crypto enthusiasts about news, ideas, investment strategies and more.
         </p>
</div>
<div class="col-lg col-sm-12 col-md-12 bg-white bor mb-5" style="height: 450px; width:100%; margin-top: 100px">
        <img src="{{asset('image/handship.jpg')}}" alt="" class="img-fluid w-25 h-25 mt-5" style="margin-left: 130px">
        <h5 class="text-center text-dark mt-5">Collabrition</h5>
        <p class="text-center text-dark">
            Don’t get lost in this continuous flow of complex information thanks to our synthetic daily reports. Our reviews and articles bring you to a deeper understanding of how crypto and blockchain work.
        </p>
</div>
</div>
    </div>
    </div>
    <h1 class="text-dark text-center mt-5 py-3">Features</h1>
    <div class="container container-sm mt-5">
    <div class="row">
        <div class="col-lg col-sm col-md col-xs mr-2 mb-3  bord" style="height: 150px">
            <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2  col-md-2 mt-4">
                    <i class="fas fa-volume-up fa-3x text-info mt-3"></i>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10 col-md-10">
                    <h4 class="mt-4">News</h4>
                    <p>
                        Stay up-to-date with the latest crypto headlines. We post  daily curated news.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg col-sm col-md col-xs bord" style="height: 150px">
            <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2  col-md-2 mt-4">
                    <i class="fas fa-envelope fa-3x text-info mt-3"></i>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10 col-md-10">
                    <h4 class="mt-4">AMA</h4>
                    <p>
                        Meet the founders of innovative crypto projects. Ask them anything about their work.
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>
        </div>
        </div>
        
<div class="container container-sm mt-5 py-3">
    <div class="row">
        <div class="col-lg col-sm col-md-6 col-xs mr-2 mb-3 bord" style="height: 150px">
            <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2  col-md-2 mt-4">
                    <i class="fas fa-pen-square fa-3x text-info mt-3"></i>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10 col-md-10">
                    <h4 class="mt-4">Articles and reviews</h4>
                    <p>
                        We publish high quality articles about crypto and in-depth reviews of disruptive projects.
                    </p>
                </div>
            </div>
        </div>
    
        <div class="col-lg col-sm col-md col-xs   bord" style="height: 150px">
            <div class="row">
                <div class="col-lg-2 col-sm-2 col-xs-2  col-md-2 mt-4">
                    <i class="fas fa-signal fa-3x text-info mt-3"></i>
                </div>
                <div class="col-10">
                    <h4 class="mt-4">Investments</h4>
                    <p>
                        Register in our platform to manage your investments and access all the details about the best deals.
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>
<div class="container div2" style="height: 300px;margin-top: 100px">
 <h1 class="text-white text-center ">Are you ready to really dive deep into <br> the Crypto universe?</h1>
    <center><a href="" class="btn px-5 py-3 b3 font-weight-bold mt-4">Join our Telegram Group &nbsp;
        <i class="fab fa-telegram-plane " style="font-size: 25px"></i>
    </a>
        <p class="text-white mt-4"><i class="fas fa-users text-white"></i> 10,000+ active people</p>
    </center>
</div>

<div class="container" style="margin-top: 100px">
    <h1 class="text-center mt-5 mb-5">Profit Company Clients</h1>
    <div class="row">
        <div class="col btn">
            <img src="{{asset('image/1.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/2.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/4.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/3.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/5.png')}}" alt="" class="img-fluid">
        </div>
    </div>


    <div class="row mt-5">
        <div class="col btn">
            <img src="{{asset('image/3.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/6.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/5.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/6.png')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/3.png')}}" alt="" class="img-fluid">
        </div>
    </div>


    <div class="row mt-5">
        <div class="col btn">
            <img src="{{asset('image/1.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/2.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/4.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/1.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col btn">
            <img src="{{asset('image/2.jpg')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>


<div class="blog" >
 <div class="container">
   <h1 class="text-center text-white" style="margin-bottom: 50px">Profit Bank BLOG</h1>
    <div class="row">
      <div class="col-lg col-sm-12 col-md col-xs-12">
                   <div class="card">
                    <img class="card-img-top" src="{{asset('image/4.jpg')}}" alt="Card image" style="width:100%; height: 300px">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn float-right">Read More</a>
                    </div>
                </div>

            </div>

        <div class="col-lg col-sm-12 col-md col-xs-12">
            <div class="card" >
                <img class="card-img-top" src="{{asset('image/4.jpg')}}" alt="Card image" style="width:100%; height: 300px">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn float-right">Read More</a>
                </div>
            </div>

        </div>

        <div class="col-lg col-sm-12 col-md col-xs-12 mb-5">
            <div class="card">
                <img class="card-img-top" src="{{asset('image/4.jpg')}}" alt="Card image" style="width:100%; height: 300px">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn float-right">Read More</a>
                </div>
            </div>

        </div>

    </div>

    <center>
    <a href="" class="btn py-2 px-5 border text-white " style="border-color: white;text-decoration: none;font-size: 20px">More Articles</a>
    </center>
</div>

  
<div class="container container-sm" style="margin-top: 400px">
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
<footer class="footer" >
<div class="container container-sm">
<div class="row mt-5">
    <div class="col-lg col-xs-12 col-sm-12 col-md-6">
        <img src="{{asset('image/project2.jpg.png')}}" alt="" class="mt-2" style="height: 150px">
    </div>
    <div class="col-lg col-xs-12 col-sm-12 col-md-6">
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
