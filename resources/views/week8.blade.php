<!DOCTYPE html>
<head>
   <link rel="icon" href="hurufr.png" />
   <title>Billiards Pool</title>
   <!-- css custom -->
   <link rel="stylesheet" type="" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" type="" href="responsive.css">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <!-- font awesome -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- Js bootstrapcdn -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
   <!-- Next & Previous Icon -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
      integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
      crossorigin="anonymous"></script>
</head>

<body>
   <!-- header section start -->
   <header class="rayhan-home">
      <div class="overlay">
         <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg ">
               <a class="navbar-brand" href="index.html"><img class="rayhan-ukuranlogo-R" src="{{ asset('img/hurufr.png') }}" alt=""><img
                     class="rayhan-ukuranlogo-Z" src="hurufz.png" alt=""></a>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="place">Place</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contactform">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container container-start" id="home">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="banner_taital_main">
                        <h1 class="banner_taital">Welcome<br>To My Page</h1>
                        <p class="banner_text">Hello, let me introduce myself, my name is Rayhan Lauzzadani, here I want
                           to explain what this website is really for, so this website was created to introduce the
                           sport of billiards to people who have never played it.</p>
                        <div class="btn_main">
                           <div class="contact_bt"><a href="#">Contact Me</a></div>
                           <div class="contact_bt active"><a href="#">Invite Me!</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="banner_taital_main">
                        <h1 class="banner_taital">Are you<br>Ready?</h1>
                        <p class="banner_text">Lets gooo!!!</p>
                        <div class="btn_main">
                           <div class="contact_bt"><a href="#">Goo</a></div>
                           <div class="contact_bt active"><a href="#">Wohoo</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
   </header>
   <!-- header section end -->
   <!-- about section start -->
   <div class="about_section" id="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-7">
               <div class="about_taital_main">
                  <h1 class="about_taital">About Billiards</h1>
                  <p class="about_text">Billiards is a cue sport that is typically played on a rectangular table covered
                     with a cloth and surrounded by cushions. The objective of the game is to score points by potting
                     balls into pockets or, in some variations, by caroming them off other balls.</p>
                  <div class="readmore_bt"><a href="#">Read More</a></div>
               </div>
            </div>
            <div class="col-md-5 padding_right0">
               <div class="about_img"><img src="file.jpg"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- services section start -->
   <div class="rayhan-section-3">
      <div class="overlay">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="services_taital">SERVICES RELATED TO BILLIARDS</h1>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="color_bt"><a href="#">Billiard Table Installation and Maintenance</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Billiard Equipment Sales</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt"><a href="#">Billiard Lessons and Coaching</a></div>
                  </div>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Billiard Table Re-clothing</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt"><a href="#">Billiard Table Moving and Relocation</a></div>
                  </div>
                  <div class="col-md-4">
                     <div class="color_bt active"><a href="#">Billiard Repair and Refurbishment</a></div>
                  </div>
               </div>
            </div>
            <div class="read_bt"><a href="#">Read More</a></div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- blog section start -->
   <div class="rayhan-section-event">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="blog_taital">Pool Hall in Surabaya</h1>
               </div>
            </div>
            <div class="choose_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="card" style="width: 18rem;">
                        <img src="galaxy-pool.jpg" class="card-img-top" alt="galaxy-pool">
                        <div class="card-body">
                           <h5 class="card-title">Galaxy Pool</h5>
                           <p class="card-text">Galaxy Pool is the largest billiard venue in East Java and supports
                              Indonesian billiard athletes.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="card" style="width: 18rem;">
                        <img src="strike-pool.jpg" class="card-img-top" alt="galaxy-pool">
                        <div class="card-body">
                           <h5 class="card-title">Strike Pool</h5>
                           <p class="card-text">Good ambience for playing pool in surabaya, central of city, closed at 2
                              pm.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="card" style="width: 18rem;">
                        <img src="koko-ball.jpg" class="card-img-top" alt="galaxy-pool">
                        <div class="card-body">
                           <h5 class="card-title">Koko 9 Ball</h5>
                           <p class="card-text">The location is strategic, and the place is very comfortable.
                              Recommended as a favorite billiard place in Surabaya.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- blog section end -->
   <!-- section form start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="contact_taital">Want to play together?</h1>
               <span class="contact_taital2">You can fill in the following form</span>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="contact_section_2">
            <div class="row">
               <div class="col-md-12">
                  <div class="mail_section_1">
                     <!-- Input Nama -->
                     <div>
                        <input type="text" class="mail_text" placeholder="Name" id="nama" name="Name">
                     </div>
                     <!-- Input Email -->
                     <div>
                        <input type="text" class="mail_text" placeholder="Email" id="email" name="Email">
                     </div>
                     <!-- Validasi Email -->
                     <div id="validasiEmail"></div>
                     <!-- Input Pesan -->
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Message"></textarea>
                     <!-- Validasi pesan -->
                     <div>
                        <div id="validasiComment" class="mb-2"></div>
                     </div>

                     <button onclick="validateInput()" type="submit" id="submit" class="btn btn-dark" href="#">Submit</button>

                     <div class="col-md-2 col-lg-3"></div>
                     <div class="col-12 col-md-8 col-lg-6">
                        <div id="sendmessage"></div>
                     </div>
                     <div class="col-md-2 col-lg-3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- section form end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <p class="copyright_text mt-4">Billiards Pool &#169; 2023, Rayhan Lauzzadani</p>
            </div>
         </div>
      </div>
   </div>
   <!-- copyright section end -->
</body>
<script src="index.js"></script>

</html>