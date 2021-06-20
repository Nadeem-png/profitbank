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
            .div6{
             height: 600px;
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
<div data-aos="fade-up"
     data-aos-anchor-placement="center-center">
     <h1 class="text-center p-4  w-100">About us</h1>
</div>

</div>
<div class="container container-sm mt-5">
<div class="row  d-flex flex-xs-row-reverse ">
<div class="col-12 col-lg-7">
<h1>Our Story</h1>
<p> We are a group of friends who are passionate about new technologies. 
We took an early interest in Bitcoin and started investing in ICOs in late 2017.</p>

<p>At the time, the ICO market was in a frenzy. Public sales were often oversubscribed and people were competing for small investing spots.
Therefore, pools emerged. They were groups of retail investors grouping their contributions to be able to negotiate better terms.
However, it was very risky because most pool admins were anonymous which meant they could easily disappear with people’s hard earned money.</p>
<p>This is why we decided to create our own community. To be fully transparent, we shared our social media profiles and showed our faces on video.
Nowadays, we are humbled to have a vibrant community of supporters, and that is just the beginning!</p>
</div>

<div class="col-12 col-lg-5">
<img src="{{asset('image/story.jpg')}}" class="img-fluid mb-2">

</div>
</div>
</div>
                   <div class="container container-sm mt-5">
<div class="row   ">

<div class="col-12 col-lg-5">
<img src="{{asset('image/story.jpg')}}" class="img-fluid mb-2">
</div>
<div class="col-12 col-lg-7">
<h1>Our Vision</h1>
<p> In the history of how we exchange value, we have only had 3 major changes: barter, money and finally digital cash. 
We see crypto as a revolution of the same magnitude. 
It appears as the best bet to become the foundation for a new financial paradigm that promotes fairness and trust..</p>

<p>Blockchain and crypto will bring more transparency, traceability, security, and offer seamless, free and instant transactions. However, 
it can be hard to navigate this new ecosystem alone. Thus, finding help and guidance in a great community is crucial..</p>
<p>We want people to find a reliable and exciting place where they can actively learn, have fun and benefit from the best opportunities.
This is why we created GAINS and this is what we are fighting for everyday.</p>
</div>


</div>

</div>
                    <div class="container div6 container-fluid-sm mt-5">
                    <div class="container container-sm text-white">
                    <h1 class="text-white mt-5">Our Values</h1>
                    <div class="row">
                    <div class="col-12 col-lg-3">
              
                    </div>
                     <div class="col-12 col-lg-9 text-white">
                      <h2>Skin In The Game</h2>
                    <p>We invest in all the deals we offer. We perform extensive research by studying materials and gathering inputs from our
                    community and network of very well connected people. We directly talk to the executive team of the project and figure out what they are made of.</p>
                    </div>
                    </div>


</div>                        
                        <div class="row">
                    <div class="col-12 col-lg-3 ">
                   
                    </div>
                     <div class="col-12 col-lg-9 text-white">
                      <h2>Long Term Vision</h2>
                    <p>Most people dream of getting rich fast. Contrarily, 
                    we are patient and have a long-term vision. We constantly improve by learning while staying independent and open-minded.</p>
                   <p>"Successful investing is getting others to agree with you… later." - James Grant</p>
                     </div>
                    </div>


</div>                  
                       <div class="row">
                    <div class="col-12 col-lg-3 ">
                   
                    </div>
                     <div class="col-12 col-lg-9 text-white">
                      <h2>Collaboration</h2>
                    <p>Connecting with people is at the heart of human nature and is necessary for
                    one’s well being. We share knowledge, discuss ideas and challenge opinions to grow together..</p>
                   <p>Nothing of significance was ever achieved by an individual acting alone.</p>
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
                        <script>
  AOS.init();
</script>
        </body>
        </html>
        
