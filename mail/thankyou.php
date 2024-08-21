<!DOCTYPE html>
<html>

<head>
  <title>Fitclub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://fitclub.in/newwebsite/css/bootstrap.min.css">
  <style>
  *{margin:0px; padding:0px;}
  :root {
  --blue: #1e90ff;
  --black:#000;
  --white: #ffffff;
  --orange:#ff3c00;
  --navy:#01080e;
  --darkgray:#0f1418;

  --bebasNeue:"Bebas Neue", sans-serif;
  --weight-100:100;
  --weight-200:200;
  --weight-300:300;
  --weight-400:400;
  --weight-500:500;
  --weight-600:600;
  --weight-700:700;
  --weight-800:800;
  --lineheight-20:20px;
  --lineheight-24:24px;
  --lineheight-28:28px;
  --lineheight-32:32px;
  --lineheight-36:36px;
  --lineheight-40:40px;
  --lineheight-44:44px;
  --lineheight-48:48px;
  --lineheight-52:52px;
  --lineheight-56:56px;
  --lineheight-60:60px;
  --fontsize-20:20px;
  --fontsize-24:24px;
  --fontsize-28:28px;
  --fontsize-32:32px;
  --fontsize-36:36px;
  --fontsize-40:40px;
  --fontsize-44:44px;
  --fontsize-48:48px;
  --fontsize-52:52px;
  --fontsize-56:56px;
  --fontsize-60:60px;
  --fontsize-64:64px;
  --fontsize-68:68px;
  --fontsize-72:72px;
  --fontsize-76:76px;
  --fontsize-80:80px;
  --gap-15:15px;
  --gap-20:20px;
  --gap-25:25px;
  --gap-30:30px;
  --gap-35:35px;
  --gap-40:40px;
  --gap-45:45px;
  --gap-50:50px;
  --gap-55:55px;
  --gap-60:60px;
  --gap-65:65px;
  --gap-70:70px;
}
header{background-color: var(--navy); height: 90px; display: flex; align-items: center; border-bottom: 1px solid #1b2127; padding:0 50px }

.fitness{background-color: #010509;}/* header */
header .main-menu {padding: 0;}
header .main-menu .navbar-collapse .navbar-nav .nav-item{font-family: var(--bebasNeue); font-weight: var(--weight-400); font-size: 26px; color: #fff; line-height: 31px; display: inline-block; padding: 0 15px; letter-spacing: 1px; position: relative;}
header .main-menu .navbar-collapse .navbar-nav .nav-item .nav-link{padding-bottom: 0;}
header .main-menu .navbar-collapse .navbar-nav .nav-item a{text-decoration: none; color:#fff; letter-spacing: 1px;}
header .main-menu .navbar-collapse .navbar-nav .nav-item:after{
  display      : block;
  content      : '';
  border-bottom: solid 2px #fff;
  transform    : scaleX(0);
  transition   : transform 300ms ease-in-out;
}

header .main-menu .navbar-collapse .navbar-nav .nav-item:hover:after {
  transform: scaleX(1);
}
.top-contact{text-align: right; margin-top: 7px;}
.top-contact li{font-family: var(--bebasNeue); font-weight: var(--weight-400); font-size: 26px; color: #fff; line-height: 31px; display: inline-block; padding: 0 15px; letter-spacing: 1px; position: relative;}
.top-contact li:after {
  display      : block;
  content      : '';
  border-bottom: solid 2px #fff;
  transform    : scaleX(0);
  transition   : transform 300ms ease-in-out;
}

.top-contact li:hover:after {
  transform: scaleX(1);
}

.top-contact li:last-child{padding-right:0}
.top-contact li a{text-decoration: none; color:#fff; letter-spacing: 1;}
.top-contact li:last-child a{color:#ff3c00}

.navbar-toggler {
  width: 50px;
  height: 50px;
  padding: 0;
  border-radius: 50%;
  transition: 0.3s ease-in-out;
  flex-shrink: 0;
}
.navbar-toggler:focus {
  box-shadow: none;
}
@media screen and (max-width: 991px) {
  .navbar-collapse.collapse:not(.show) {
    display: block;
  }
  .navbar-collapse {
    position: fixed;
    top: 0;
    left: 0;
    background: #212529;
    width: 215px;
    height: 100%;
    z-index: 9999;
    padding: 25px;
    transform: translateX(-215px);
    transition: 0.5s ease-in-out;
    display: block;
  }
  .navbar-collapse.show {
    transform: translateX(0px);
  }
  .nav-overlay {
    position: absolute;
    background: #0000007d;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    z-index: 2;
    transform: translateX(-100vw);
    transition: 0.5s ease-in-out;
    display: block;
  }
  .nav-overlay.active {
    transform: translateX(0);
  }
}

.thankyou-msg{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

  </style>

</head>
<body class="home-page">

<header>
      <div class="container-fluid">
         <div class="row">
            <div class="col-2 col-sm-2 col-md-6 col-xl-5 tab-order1">
               <!-- nav -->
               <nav class="navbar navbar-expand-lg main-menu">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!--   <span class="navbar-toggler-icon"></span> -->
                      <img src="images/menu-bar.svg" class="navbar-toggler-icon" alt="">
                    </button>
                    <!-- <div class="nav-overlay"></div> -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Become a trainer</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Franchise</a>
                        </li>                        
                        <li class="nav-item">
                          <a class="nav-link">Faq's</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link">careers</a>
                         </li>
                      </ul>
                    </div>
                  
                </nav>
                <!-- end nav -->
            </div>
            <div class="col-5 col-sm-5 col-md-12 col-xl-2 text-center tab-order2"> 
               <a href="index.html"><img src="https://fitclub.in/newwebsite/images/logo.png" alt="logo"></a>
         </div>
            <div class="col-5 col-sm-5 col-md-6 col-xl-5 tab-order3">
               <ul class="top-contact">
                  <li class="mob-hide"><a href="#">Contact Us</a></li>
                  <li><a href="#">join now [+]</a></li>
               </ul>
            </div>
         </div>
      </div>
   </header>
   
   <section class="thankyou-msg">
	<h2>Thank you for get in touch with us. One of our executive will get back to you shortly!!</h2>
   </section>

</body>

<script>
    
     window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "https://fitclub.in/";

    }, 10000);
</script>
</html>