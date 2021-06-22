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
             .work{
               
                border: 2px solid #1b4b72;
                border-radius: 20px;
            }
            .div4{
            height: auto;
                background-color: #003345;
            }
            .blog{
               
                margin-top: 100px;
               
            }
             .card{
                background-color: #1b4b72;
                border:;
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

<nav class="navbar nav1   navbar-expand-lg"style="height: 70px;background-color:#0b5262"">
<div class="w-25">
        <a href="/" class="navbar-brand">
            <img src="{{asset('image/project2.jpg.png')}}" class="img-fluid w-50 h-50" style="margin-left:185px">
        </a>
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars text-white"></i></button>
    
    <div class="navbar-collapse   collapse" id="mynav">
        <ul class="navbar-nav  ">
        <li class="nav-item" @yield('nava')>
                    <a href="/" class="nav-link a1  ml-5 font-weight-bold">Home</a>
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
<div data-aos="fade-right"
     data-aos-offset="600"
     data-aos-easing="ease-in-sine">
     <div class="container container-sm " style="margin-top:80px">
<div class="row d-flex justify-content-between align-items-center d-column text-white">
<div class="col-12 col-lg-7">
<h1 class= "text-white font-weight-bold p-4">
 Decentralized Fund Management Protocol
    </h1>
    <h5 class= "text-white font-weight-bold p-4">
        Discover new projects  |  Participate in Events  |  Investment Opportunities
     </h5>
     <a href="" class="btn btn-primary mb-3   px-5 py-3 b1 font-weight-bold">Join our Telegram Group &nbsp; <i class="fab fa-telegram-plane text-white fa-2x"></i></a>
       
 </div>
</div>
</div>

</div>


</header>

    <div class="container container-sm mt-5 text-center">
   <div data-aos="fade-up"
     data-aos-duration="3000">
     <h1 class="text-center">How Profit Bank works?</h1>
    <p class="text-center mt-4">Profit Bank is a decentralized protocol leveraging the blockchain technology
			 to offer an open market for prospecting investors, bankable projects, 
			and seasoned traders to exchange their offering in a trust less and noncustodial manner.</p>
    
</div>
 <div class="container container-sm mt-5">
    <div data-aos="fade-up"
     data-aos-duration="3000">
     <div class="row mx-auto">
     
     <div class="col-12  col-lg-4  mb-4" >
    <div class="card p-3 work h-100">
    <div class="card-text text-white">
    <h2 class=" text-center mt-3"> Smart Contracts</h2>
    <p class="text-center">The assets are stored in a non-custodial way and the trades are executed using
		         decentralized platform with deep liquidity.</p>
    </div>
    </div>
    </div>
      <div class="col-12  col-lg-4  mb-4" >
    <div class="card p-3 work h-100 ">
    <div class="card-text text-white">
    <h2 class=" text-center mt-3"> Traders</h2>
    <p class="text-center">Any fund manager/trader can deploy contract to start their fund using the protocol.
			 And that contract will act as a pot where investors can invest without having to
			 give away the custody of their assets..</p>
    </div>
    </div>
    </div>
       <div class="col-12  col-lg-4  mb-4" >
    <div class="card p-3 work h-100">
    <div class="card-text text-white">
    <h2 class=" text-center mt-3">Funds</h2>
    <p class="text-center">Profit Bank state of the art funds and strategies which analyse the markets and 
			generate highly profitable returns.</p>
    </div>
    </div>
    </div>
     
     
     
     
     
     </div>
     </div>
</div>
    
    
    </div>
    <div class="container container-sm mt-5">
    <h1 class="text-center mb-5">Profit Bank Ranking System</h1>
    <div data-aos="fade-up"
     data-aos-duration="3000">

    <div class="row mx-auto">
    <div class="col-12  col-lg-3  mb-4" >
    <div class="card py-4 px-3 text-center rank">
    <div class="card-text text-white">
    <h4 class=" text-center mt-3">Silver</h4>
    <h5 class="text-center">PROFIT SILVER FISHES</h5>
    </div>
    
<div class="card-text text-white mt-2">
<h5 class="text-center">10,000 PROFIT</h5>
                <h6 class="text-center">10% of allocations</h6>
</div>
    </div>

  
    </div>
    <div class="col-12  col-lg-3  mb-4" >
    <div class="card py-4 px-3 text-center rank">
    <div class="card-text text-white">
    <h4 class=" text-center mt-3">Gold</h4>
    <h5 class="text-center">PROFIT SLEEK DOLPHINS</h5>
    </div>
    
<div class="card-text text-white mt-2">
<h5 class="text-center">30,000 PROFIT</h5>
                <h6 class="text-center">15% of allocations</h6>
</div>
    </div>

  
    </div>
    <div class="col-12  col-lg-3 mb-4 " >
    <div class="card py-4 px-3 text-center rank">
    <div class="card-text text-white">
    <h4 class=" text-center mt-3">Platinum</h4>
    <h5 class="text-center">PROFIT BLUE<br> WHALE</h5>
    </div>
   
<div class="card-text text-white mt-2">
<h5 class="text-center">200,000 PROFIT</h5>
                <h6 class="text-center">50% of allocations</h6>
</div>
    </div>

  
    </div>
    <div class="col-12  col-lg-3 mb-4" >
    <div class="card py-4 px-3 text-center rank">
    <div class="card-text text-white">
    <h4 class=" text-center mt-3">Diamond</h4>
    <h5 class="text-center">PROFIT SLEEK DOLPHINS</h5>
    </div>

<div class="card-text text-white mt-2">
<h5 class="text-center">100,000 PROFIT</h5>
                <h6 class="text-center">25% of allocations</h6>
</div>
    </div>

  
    </div>
    </div>
    </div>
    </div>
    
    <div class="div1">
    <div class="container container-sm">

    <h1 class="text-center mt-5 text-white py-3" >ProfitBank Offers you</h1>
        <div class="row">
        <div data-aos="fade-up"
     data-aos-duration="3000">
       <div class="col-lg-4 col-sm-12 col-md-12 bg-white mr-2 text-center mt-5 ">
       <div class="card text-center text-white py-4 px-3">
       <div class="card-body">
          <img src="{{asset('image/images.png')}}" alt="" class="img-fluid text-center w-25 h-25 mt-5">
        <h5 class="text-center text-dark mt-5">Staking</h5>
        <p class="text-center text-dark">
Earn returns the smartest way by staking and farming. Which will be invested in the best
			 DeFi platforms and earn bonus– boosting profits further.
        </p>
       <div
       
       </div>
 
        </div>
</div>
      
<div data-aos="fade-up"
     data-aos-duration="3000">
     <div class="col-lg-4 col-sm-12 col-md-12 bg-white mr-2 text-center mt-5 ">
       <div class="card text-center text-white py-4 px-3">
       <div class="card-body">
        <img src="{{asset('image/c1.jpg')}}" alt="" class="img-fluid text-center w-25 h-25 mt-5" >
        <h5 class="text-center text-dark mt-5">Pooling</h5>
        <p class="text-center text-dark">
Pooling PFB for pre-qualified projects for a fixed period. Returns are stated by each pool and
			 they all have a minimum ROI, that is paid back in PBANK.          </p>
<div
       
       </div>
 
        </div>
</div>
     <div data-aos="fade-up"
     data-aos-duration="3000">
      <div class="col-lg-4 col-sm-12 col-md-12 bg-white mr-2 text-center mt-5 ">
       <div class="card text-center text-white py-4 px-3">
       <div class="card-body">
        <img src="{{asset('image/handship.jpg')}}" alt="" class="img-fluid text-center w-25 h-25 mt-5">
        <h5 class="text-center text-dark mt-5">Rewards</h5>
        <p class="text-center text-dark">
Get rewarded for holding PBANK, the native PROFIT BANK token. We have expertly designed our 
			contract to bring rewards to all our token holders.
        </p>
        </div>
 
        </div>
</div>
</div>





</div>
    </div>
    </div>
  

<div class="container container-sm mt-5 div2">
 <div data-aos="fade-up"
     data-aos-duration="3000">
 <div class="card">
    <div class="card-body text-center text-white">
      <h4 class="card-title text-center text-white">About</h4>
      <p class="card-text text-center text-white">Credibility is key but our platform takes out the trust element of the process and our
      clients get paid before the project does. We also have markers to safeguard investments using our unique system tools to analyse 
      where the project is going. If the project looks like it could fail, then our system automatically pulls out our position to safeguard our capital. </p>
    </div>
  </div>
</div>
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
