<!doctype html>
<html>
<head>
    <meta charset="utf-8">
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
<div class="bg-contact">
<div data-aos="fade-up"
     data-aos-anchor-placement="center-center">
     <h1 class="text-center p-4  w-100">Frequestly Asked Questions</h1>
</div>

</div>
<div class="container container-sm">
<div class="row">
<div class="col-12 col-lg-3 py-lg-3">
<div data-aos="fade-up"
     data-aos-anchor-placement="top-center">
     <div class="d-flex my-lg-3 d-lg-flex flex-lg-column flex-lg-align-start">

<button class="btn btn2 btn-link  text-lg-left py-lg-3 py-2">General</button>
<button class="btn btn2 btn-link text-lg-left py-lg-3 py-2">Pool</button>
<button class="btn btn2 btn-link text-lg-left py-lg-3 py-2">Events</button>
<button class="btn btn2 btn-link text-lg-left py-lg-3 py-2">Community</button>
</div>
</div>


</div>
<div class="col-12 col-lg-8 ml-lg-5">
<h2 class="mt-3">General</h2>
<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
        What is GAINS about?
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        GAINS is one of the biggest and most respected crypto communities, created over 2 years ago. We have raised several millions of dollars for many ICOs and we organize fun events with companies so that you can learn more about crypto and blockchain. During these events, participants can compete for prizes sometimes worth over $1,000 by asking questions or showcasing their knowledge! Our members get the chance to invest in the latest and best crypto projects with terms they wouldn’t be able to get as individuals.
         Our platform allows you to easily keep track of all your investments.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Why the name GAINS?
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
        GAINS stands for Group Action Is Never Small, embodying the pooling and collaboration concepts which are also the essence of blockchain and decentralization. We also chose it because we’re obviously here to chase big GAINS :p
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        How is GAINS different from other communities?
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
        We believe in quality over quantity. Instead of offering a constant flow of deals, most of which would result in a loss of over 90% because they were rushed into and lacked proper research, we offer much fewer deals but of much higher quality. We’re the only crypto community in the world to provide both events that involve interaction with crypto companies and investment opportunities. These events give us a unique understanding of the crypto and blockchain space which helps make more educated investment decisions.    
        </div>
      </div>
    </div>
  </div>
  <h2 class="mt-4">Pools</h2>
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
        How does the pool process work on the platform?
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        When a new project is available, you will find it in the pool section under “Upcoming Pools” with a full description of the project and the deal we have in order for you to decide whether you want to invest. You will have the option to pledge for the project, allowing us to gauge the interest. If we run a pool afterwards, you will see it in the “Ongoing” section with the starting date and a contribution link once it’s live, letting you contribute in just a few clicks.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        How do I contribute?
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
        When a pool is ongoing, you will be able to click on “Contribute” and get the contribution link(s). Just follow the instructions from there, it should be fast and easy but if you have any doubt, don’t hesitate to ask for help in chat. We mainly use Primablock. Primablock is the most used platform in crypto for fundraising purposes and uses a fully audited smart contract that makes it safe and secure. Never send funds from exchanges, only send from addresses you have full control over.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        How do I add my wallet addresses?

        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
        Under the "My Wallet" section you will be able to add, delete and visualize your ETH addresses. To be able to safely link the address to your account and be sure that the address belongs to you, we will ask you to sign a message with your address. The process is fast, simple and explained in the relevant section. More details can also be found here. Having registered addresses will allow you to pledge, contribute and then track all your investments.
        </div>
      </div>
    </div>
  </div>
  <h2 class="mt-4">Events</h2>
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
        What are the events GAINS organizes?
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        GAINS organizes AMAs (Ask Me Anything) and quizzes. We also have many other entertaining events to come.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        What do I get from participating in GAINS’ events?
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
        GAINS’ events are a unique opportunity to interact in a fun way with busy project leaders who make time for our community. Some of these events are akin to a friendly competition: participants showcase their knowledge and the best are rewarded with a prize.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        How does an AMA work?
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
        Someone with a clear understanding of the project, its current status and direction for the future (usually one of the founders or a C-level executive) comes in our community and answers questions asked by our members.
        </div>
      </div>
    </div>
  </div>
  <h2 class="mt-4">Community</h2>
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
        How do I talk about crypto and interact with other members?
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        We have a community of several thousand members on Telegram and Discord. After joining, you will be able to discuss projects, deals and crypto in general with experienced crypto enthusiasts which will help you get a better grasp of this complex ecosystem.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        I want to submit my crypto project to GAINS, how do I get in touch?
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
        If you would like to get in touch with us to discuss your project and how we could help or for any other inquiries, please go to our contact page or reach out to us via LinkedIn or Telegram (preferred).
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        How can I get updates regarding new events or pools?
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
        Whenever a pool is available or a change occurs (pledges are open, contributions are available, etc.), you will receive an email notifying you about the change. The same goes for events we host. You will be able to enable or disable the notifications under the “Settings” section in the “Notifications” tab. All the updates will also be posted on our social media platforms: Telegram, Discord, Facebook and others.
        </div>
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
                        <script>
  AOS.init();
</script>
        </body>
        </html>
        
