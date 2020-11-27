<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Telthem</title>
        <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
      <style type="text/css">
        ul li{
          list-style: none;
        }
        ul li a{
          text-decoration: none;
          color: #c6c9cd;
        }
        .navbar{
            border-bottom: 2px solid gold !important;
        }
              .telthem{
                background-color: #3e6785 !important;
              }
              .jumbotron{
                  border-radius: unset !important;
              }
              .post_item {
                    margin-top: 20px;
                    padding: 2px;
                }
                .post_item .media-body h3 {
                    font-size: 16px;
                    line-height: 20px;
                    margin-bottom: 6px;
                    transition: all 0.3s linear;
                }
              .media-body {
                  justify-content: center;
                  align-self: center;
                  padding-left: 20px;
              }
            .ion-android-star{
              font-size: 34px;
              color: gold;
            }
              

            </style>
            }
    </head>
    <body>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('img/logo.png') }}" style="width: 90px;" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav ml-auto">


          <li class="nav-item">
             <a class="nav-link" href="#">Sciences</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#">Arts</a>
          </li>
           <li class="nav-item">
           <a class="nav-link" href="#">Commercials</a>
        </li>
         <li class="nav-item">
             <a class="nav-link" href="#">Religious</a>
          </li>
           <li class="nav-item">
               <a class="nav-link" href="#">About</a>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Contact</a>
            </li>
              <li class="nav-item">
               <a class="nav-link btn btn-danger" href="#">Hire Me Now</a>
            </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron telthem mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="search mt-lg-5 d-flex">
          <div class="clear">
         
          <select style="margin-top: -9px;border-radius: unset;"   class="form-control btn btn-danger" id="gender" name="gender">
            <option value="0">Select Combinations</option>
            <option value="telth-0001">Sciences and Technologies</option>
            <option value="telth-0002">Commercials and Business</option>
            <option value="telth-0003">Arts and Culture</option>
            <option value="telth-0004">Religious and Morals</option>
            <option value="telth-0005">Technicals</option>
          </select>
        </div>
        <input type="text" class="form-control d-flex" style="margin-top: -9px;border-radius: unset;" id="seachco" name="" placeholder="Search subject you want .......">

    </div>
      </div>
    </div>
  </div>

    <div class="container">
     <div class="row"> 
  <div class="col-md-8 mb-lg-0">
    
    <h3 class="card-header-pills rounded bg-primary text-light p-2" style="background-color: #3e6785 !important;">Latest Updates</h3>
    
      <div class="row">
        <div class="col-md-6">
          <div class="card">
        <img class="card-img-top rounded-0 img-fluid" src="{{ asset('img/learn.png') }}" alt="">
        <div class="card-body">
          <h5 class="card-title">Advanced Visual Basic.NET  <small class="text-success float-right">Free <i class="fa fa-star"></i></small></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <b class="badge badge-success p-2">#IT & Technology</b>
           <a href="#" class="btn btn-secondary btn-sm text-light float-right">Enroll Now</a>
        </div>
      </div>
        </div>
        <div class="col-md-6">
          <div class="card">
        <img class="card-img-top rounded-0 img-fluid" src="{{ asset('img/software.jpg') }}" alt="">
        <div class="card-body">
          <h5 class="card-title">Business Technology <b class="text-warning float-right">Pro <i class="fa fa-shopping-basket"></i></b></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <b class="badge badge-success p-2">#Business & Technology</b>
           <a href="#" class="btn btn-secondary btn-sm text-light float-right">Enroll Now</a>
        </div>
      </div>
        </div>
    </div><br>

    {{-- ====================row=end======================= --}}

    <div class="row">
        <div class="col-md-6">
          <div class="card">
        <img class="card-img-top rounded-0 img-fluid" src="{{ asset('img/learn4.jpg') }}" alt="">
        <div class="card-body">
          <h5 class="card-title">Chishona Chedu <b class="text-success float-right">Free <i class="fa fa-star"></i></b></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <b class="badge badge-success p-2">#Arts & Culture</b>
           <a href="#" class="btn btn-secondary btn-sm text-light float-right">Enroll Now</a>
        </div>
      </div>
        </div>
        <div class="col-md-6">
          <div class="card">
        <img class="card-img-top rounded-0 img-fluid" src="{{ asset('img/banner.jpg') }}" alt="">
        <div class="card-body">
          <h5 class="card-title">Advanced Linear Programming 2 <b class="text-warning float-right">Pro <i class="fa fa-shopping-basket"></i></b></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <b class="badge badge-success p-2">#Mathematics</b>
          <a href="#" class="btn btn-secondary btn-sm text-light float-right">Enroll Now</a>
        </div>
      </div>
        </div>
    </div>
     <div class="page p-3 justify-content-center">
<nav>
  <ul class="pagination">
    <li>
      <a class="btn btn-primary btn-sm" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li><a class="btn btn-primary btn-sm" href="#">1</a></li>
    <li><a class="btn btn-primary btn-sm" href="#">2</a></li>
    <li><a class="btn btn-primary btn-sm" href="#">3</a></li>
    <li><a class="btn btn-primary btn-sm" href="#">4</a></li>
    <li><a class="btn btn-primary btn-sm" href="#">5</a></li>
    <li>
      <a class="btn btn-primary btn-sm" href="#" aria-label="Previous">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
  </ul>
</nav>
     </div>
<div class="row bg-primary p-5 justify-content-center" style="background-image: url({{ asset('img/ads.png') }}); background-size: cover; background-position: center;">
     <button class="btn btn-warning text-light" type="button">Start Shopping <i class="fa fa-shopping-basket" ></i></button>
</div>
  </div>
  
  <div class="col-md-4">
    <aside class="single_sidebar_widget search_widget">
      <form action="#">
          <div class="form-group">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder='Search Keyword'
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Search Keyword'">
                  <div class="input-group-append">
                      <button class="btn btn-secondary" type="button"><i class="fa fa-search" ></i></button>
                  </div>
              </div>
          </div>
          <button class="btn btn-primary rounded-0 btn-block text-white"
              type="submit" style="background-color: #3e6785 !important;">Search</button>
      </form>
  </aside>

  <aside class="card mt-lg-3">
   <div class="card">
     <div class="card-header">Category</div>
     <div class="card-body">
       <ul class="list-group list-group-flush">
         <li class="list-group-item">
             <a class="nav-link" href="#"> <i class="fa fa-book fa-1x"></i> SCIENCES & TECHS<b class="badge badge-danger float-right p-2 rounded-circle">230</b></a>
          </li>
          <li class="list-group-item">
             <a class="nav-link" href="#"><i class="fa fa-home fa-1x"></i> ARTS & CULTURE <b class="badge badge-danger float-right p-1 rounded-circle">56</b></a>
          </li>
           <li class="list-group-item">
           <a class="nav-link" href="#"><i class="fa fa-briefcase fa-1x"></i> Commercials <b class="badge badge-danger float-right p-2 rounded-circle">0</b></a>
        </li>
         <li class="list-group-item">
             <a class="nav-link" href="#"><i class="fa fa-globe fa-1x"></i> Religious <b class="badge badge-danger float-right p-2 rounded-circle">2</b></a>
        </li>
        <li class="list-group-item">
             <a class="nav-link" href="#"><i class="fa fa-calculator fa-1x"></i> Mathematics <b class="badge badge-danger float-right p-2 rounded-circle">0</b></a>
        </li>
        
    </ul>
     </div>
   </div>
  </aside>

<aside class="card mt-lg-3">
  <div class="card-header">Recent Post</div>
  <div class="media post_item" style="padding: 7px;">
    <img src="{{ asset('img/avatar1.png') }}" alt="post" class="img-fluid d-flex">
    <div class="media-body mt-lg-3">
        <a href="single-blog.html">
            <h3>From life was you fish...</h3>
        </a>
        <p>21 Hour ago</p>
    </div>
  </div><hr>
  <div class="media post_item" style="padding: 7px;">
    <img src="{{ asset('img/avatar2.png') }}" alt="post">
    <div class="media-body mt-lg-3">
        <a href="single-blog.html">
            <h3>The Amazing Hubble</h3>
        </a>
        <p>August 09, 2020</p>
    </div>
  </div>


</aside>

<aside class="card mt-lg-3 mb-4">
  <div class="card-header">Instagram Feeds</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <a href="#">
            <img class="img-fluid" src="{{ asset('img/avatar1.png') }}" alt="">
        </a>
        </div>

        <div class="col-md-4">
          <a href="#">
            <img class="img-fluid" src="{{ asset('img/avatar1.png') }}" alt="">
        </a>
        </div>

        <div class="col-md-4">
          <a href="#">
            <img class="img-fluid" src="{{ asset('img/avatar1.png') }}" alt="">
        </a>
        </div>

      </div>
    </div>
</aside>




  </div>
  </div>
    </div>
  <section class="bg-primary p-5" style="background-image: url({{asset('img/bg.jpg')}}); background-size: cover; background-blend-mode: darken;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="search mt-lg-3 d-flex">
          <input type="text" class="form-control d-flex" style="margin-top: -9px;border-radius: unset;"   id="seachco" name="" placeholder="Newsletters">
          <button style="margin-top: -9px;border-radius: unset;"    class="btn btn-danger d-flex" id="subscribe" name="subscribe">Subscribe</button>
  
        </div>

      </div>
    </div>
  </section>
   <section class="bg-info p-5" style="border-bottom-left-radius: 40%">
    <div class="container">
    <div class="row">
      <div class="col-md-7">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators d-none">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="{{ asset('img/learn3.jpg') }}" alt="First slide" style="width: 680px" class="img-fluid rounded-bottom">
         
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="{{ asset('img/learn1.jpg') }}" alt="Second slide" style="width: 680px" class="img-fluid rounded-bottom">
         
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="{{ asset('img/learn4.jpg') }}" alt="Third slide" style="width: 680px" class="img-fluid rounded-bottom">
          
        </div>
      </div>
      <a class="carousel-control-prev d-none" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next d-none" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

      </div>
      <div class="col-md-5">
       <div class="mt-lg-5 p-3 bg">
            <h2 class="text-light">Telthem E-learning</h2>
            <p class="text-light text-justify" style="font-size: 1.2rem;">Some quick example text to build on the card title and make up the bulk of the card's content.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <a class="btn btn-danger rounded-o" href="#" role="button">Enroll Now &raquo;</a>
         
      </div>
    </div>
    </div>
  </section>
  <section class="bg-light p-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 img d-flex bg-primary p-3 rounded" style="background-color: #3e6785 !important;">
         
            <img src="{{ asset('img/avatar.jpg') }}" style="width: 200px; height: 200px" class="img-fluid rounded-circle mt-lg-5">
          
        <blockquote class="mt-lg-5 ml-4 text-light" >
          <h3>Innocent Tauzeni</h3>
          <p>My Mission is to assist individuals and organizations throughout the world gain competitive advantage through the provision of innovative and simplified ICT business solutions that improve their profitability.</p>
          <h4 class="badge badge-success p-3" style="font-size: 1.0rem">My Skills</h4>
          <p>Frontend & Backend Developer,spring boot Laravel, CodeIgniter frameworks,rich frontend development,Android,graphic design,Data Entry, VB.NET, JAVA & C# </p>
          <p class="mt-2">
             <a href="#"><i class="ion-android-star"></i></a>
            <a href="#"><i class="ion-android-star"></i></a>
            <a href="#"><i class="ion-android-star"></i></a>
            <a href="#"><i class="ion-android-star"></i></a>
            <a href="#"><i class="ion-android-star"></i></a>
            <a href="#"><i class="ion-android-star"></i></a>

            <span class="float-right"><button class="btn btn-success ml-lg-5 mt-3">Rate me</button>
            </span>
          </p>
          <div class="float-right">
              <a class="btn btn-secondary rounded-circle p-2" style="background-color: #3e6785 !important; border: none;" href="https://www.facebook.com/pg/Telthemweb-289211031806239/posts/"><i style="font-size: 30px;" class="ion-social-facebook"></i></a>
              <a class="btn btn-secondary rounded-circle p-2" style="background-color: #3e6785 !important; border: none;" href="https://www.linkedin.com/in/innocent-tauzeni-a5a18273/"><i style="font-size: 30px;" class="ion-social-linkedin"></i></a>
              <a class="btn btn-secondary rounded-circle p-2" style="background-color: #3e6785 !important; border: none;" href="https://www.instagram.com/telthem_tauzeni/"><i style="font-size: 30px;" class="ion-social-instagram"></i></a>
              <a class="btn btn-secondary rounded-circle p-2" style="background-color: #3e6785 !important; border: none;" href="#"><i style="font-size: 30px;" class="ion-social-youtube"></i></a>
              <a class="btn btn-secondary rounded-circle p-2" style="background-color: #3e6785 !important; border: none;" href="https://github.com/telthem89"><i style="font-size: 30px;" class="ion-social-github"></i></a>
              
            </div>
      </blockquote><br>
          
      </div>
      </div>
    </div>
  </section>
  <section class="bg-primary p-5" style="background-color: #3e6785 !important;">
    <div class="container">
      <h2 class="text-light text-center">Our Patners</h2><hr>
      <div class="row">
        <div class="col-md-4">
          <div class="card text-center">
            <img class="card-img-top" src="{{ asset('img/yaita.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Yaita : For All Deliveries</h4>
              <p class="card-text">Access Developer Documentation and start transacting online.</p>
              <a href="https://www.yaita.co.zw" class="btn btn-primary">Request Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <img class="card-img-top" src="{{ asset('img/sage.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Sagehill: Web Hosting</h4>
              <p class="card-text">Get started quickly. Use our SDKs PHP, .NET, PYTHON and more.</p>
              <a href="https://www.sagehillhost.com" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <img class="card-img-top" src="{{ asset('img/mfx.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Media Freesonix</h4>
              <p class="card-text">Join our community and help each other integrate and #GetPaid.</p>
               <a href="http://www.mfx.co.zw" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

   <!-- footer start -->
    <footer class="footer bg-dark p-lg-5">
        <div class="footer_top">
            <div class="container">
                
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="text-light text-center">
                                About Us
                            </h3>
                            <ul class="ml-lg-5">
                                <li><a href="#">Online Learning</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press Center</a></li>
                                <li><a href="#">Become an Instructor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="text-light text-center">
                                Campus
                            </h3>
                            <ul class="ml-lg-5">
                                <li><a href="#">Our Plans</a></li>
                                <li><a href="#">Free Trial</a></li>
                                <li><a href="#">Academic Solutions</a></li>
                                <li><a href="#">Business Solutions</a></li>
                                <li><a href="#">Government Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="text-light text-center">
                                Study
                            </h3>
                            <ul class="ml-lg-5">
                                <li><a href="#">Admissions Policy</a></li>
                                <li><a href="#">Getting Started</a></li>
                                <li><a href="#">Visa Information</a></li>
                                <li><a href="#">Tuition Calculator</a></li>
                                <li><a href="#">Request Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="text-light text-center">
                                Support
                            </h3>
                            <ul class="ml-lg-5">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">System Requirements</a></li>
                                <li><a href="#">Register Activation Key</a></li>
                                <li><a href="#">Site feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <section class="text-center" style="background-color: #333333 !important;color: #fff;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<i class="ti-heart" aria-hidden="true"></i>  <a style="color: #fff;" href="https://telthemweb.co.zw" target="_blank">Telthemweb</a></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer end  -->

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- Scripts -->
    </body>
</html>
