<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">

    <!-- JS/JQUERY -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="animatescroll.js"></script>
    <script type="text/javascript">
      $(function () {
        $(document).scroll(function () {
          var $nav = $(".navbar");
          var $logoNav = $(".logo-nav");
          $nav.toggleClass('scrolled',$(this).scrollTop() > $nav.height());
          $logoNav.toggleClass('scrolled', $(this).scrollTop()>$nav.height()); 
        });
        
      });
    </script>
    <script>
            $('.navbar-nav>li>a').on('click', function(){
            $('.navbar-collapse').collapse('hide');
        });
        </script>

    <title>Mack Studios</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md fixed-top">
      <a href="#" class="nav-logo-a"><img src="img/logo.png" class="logo-nav img-fluid"></a>
        <div class="mobShow">
          <h1 class="he1">MACK STUDIOS</h1>
        </div>
        <a class="navbar-toggler" data-toggle="collapse" data-target="#nav-coll" aria-controls="nav-coll" aria-expanded="false" aria-label="Toggle navigation">
             &#9776
          </a>
      <div class="collapse navbar-collapse" id="nav-coll">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-most" id="serv-nav" onclick="$('#services-con').animatescroll();" href="#">SERVICES OFFERED</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-most" onclick="$('#port-con').animatescroll();" href="#">PORTFOLIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-most" onclick="$('#contact-con').animatescroll();" href="#">CONTACT US</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid con-bg con1">
        <div class="div1">
          <center>
            <h1 class="mx-atuo he1">
              <span class="span2">Websites</span> that define your business.
            </h1>
          </center>
        </div>  
    </div>

    <div class="container-fluid con2 con-bg" id="services-con">
      <div class="row">
        <div class="col-sm-12 col-lg-3">
          <div class="text-serv-r text-services text-most">
            <h5 class="h-font2 h-serv">Web Development</h5>
            <p>
              We provide front-end, back-end, full stack & e-commerce website solutions. Take your business, blog or any other content live on the web with completely responsive design at the best pricing. Customer satisfaction is our first priority and we provide multiple design options until you are satisfied. We also provide design services separately for logos or any other media required.
            </p>
            <p class="text-serv-l"><a href="#"> > Inquire Now</a></p>
          </div>
          
          <div class="text-serv-r text-services text-most">
            <h5 class="h-font2 h-serv h-serv-low">Design Services</h5>
            <p>
              With our team of professional designers, you always get the best. Uniqueness is always assured and our only priority is customer satisfaction. We create dynamic UI/UX designs, web templates, logos & any other form of artwork. Our designers understand and implement your perspective to give you a one of a kind experience.
            </p>
            <p class="text-serv-l"><a href="#"> > Inquire Now</a></p>
          </div>

        </div>
        <div class="col-sm-12 col-lg-6 ss1 con-bg">
          <center>
            <img src="img/services-1.png" width="500" class="img-serv">
          </center>
          
        </div>
        <div class="col-sm-12 col-lg-3">
          <div class="text-serv-l text-services text-most">
            <h5 class="h-font2 h-serv">Print Media</h5>
            <p>
              We cater to all your stationery needs at one stop. We offer a wide spectrum of designs for all stationery and printed media goods, including a selection of premium quality products. Give your business the edge of uniqueness with MACK Studios. We ensure all designs are unique and are consistently spread out across all your products, helping you craft your brand.
            </p>
            <p class="text-serv-r"><a href="#"> > Inquire Now</a></p>
          </div>
          <div class="text-serv-l text-services text-most">
            <h5 class="h-font2 h-serv h-serv-low">Digital Marketing</h5>
            <p>
              Take your business up a notch with our digital marketing solutions. Get the maximum number of customers easily with digital marketing. Show up at the top at all search engines with our SEO solutions. We believe in building customer relations and we can do the same for you. Help your business grow today with MACK Studios.
            </p>
            <p class="text-serv-r"><a href="#"> > Inquire Now</a></p>
          </div>
        </div>
      </div>

    </div>

   <!-- 
    <div class="container-fluid mobShow con7 con-bg">
      <center>
        <h1 class="he1 he2">Our <span class="span2">Services</span></h1>
      </center>
        <div class="card-deck">
          <div class="card text-center col-sm-12" style="width: 18rem;">
            <div class="card-body">
              <img src="img/wd-3.png" class="img-card img-fluid" />
              <h5 class="card-title text-most">Web Development</h5>
              <p class="card-text text-most">We provides front-end, back-end, full stack & e-commerce website solutions. Take your business, blog or any other content live on the web with completely responsive design at the best pricing. Cusotmer satisfaction is our first priority and we provide multiple design options until you are satisfied. We also provide design services seperately for logos or any other media required.</p>
              <a href="#" class="text-most"> > Inquire Now</a>
            </div>
          </div>
          <div class="card text-center col-sm-12" style="width: 18rem;">
            <div class="card-body">
              <img src="img/pm-3.png" class="img-card img-fluid" />
              <h5 class="card-title text-most">Print Media Services</h5>
              <p class="card-text text-most">We cater to all your stationery needs at one stop. We offer a wide spectrum of designs for all stationery and printed media goods, including a selection of premium quality products. Give your business the edge of uniqueness with MACK Studios. We ensure all designs are unique and are consistently spread out across all your products, helping you craft your brand.</p>
              <a href="#" class="text-most"> > Inquire Now</a>
            </div>
          </div>
          <div class="card text-center col-sm-12" style="width: 18rem;">
            <div class="card-body">
              <img src="img/dm-3.png" class="img-card img-fluid" />
              <h5 class="card-title text-most">Digital Marketing</h5>
              <p class="card-text text-most">Take your business up a notch with our digital marketing solutions. Get the maximum number of customers easily with digital marketing. Show up at the top at all search engines with our SEO solutions. We believe in building customer relations and we can do the same for you. Help your business grow today with MACK Studios.</p>
              <a href="#" class="text-most"> > Inquire Now</a>
            </div>
          </div>
        </div>
        <div class="card-deck card-deck-2">
          <div class="card text-center col-sm-12 col-lg-4" style="width: 18rem;">
            <div class="card-body">
              <img src="img/d-2.png" class="img-card img-fluid" />
              <h5 class="card-title text-most">Design Services</h5>
              <p class="card-text text-most">With our team of proffesional designers, you always get the best. Uniqueness is always assured and our only priority is cusotmer satisfaction. We create dynamic UI/UX designs, web templates, logos & any other form of artwork. Our designers understand and implement your perspective to give you a one of a kind experience.</p>
              <a href="#" class="text-most"> > Inquire Now</a>
            </div>
          </div>
        </div>
      </div>-->

    <div class="container-fluid con6 con-bg" id="port-con">
      <center><h1 class="h-font">Latest Projects</h1></center>
      <div class="row row-port">
        <div class="col-sm-12 col-lg-6">
          <center><h5 class="h-font2 h-port">Ashoka Furniture House</h5></center>
          <img src="img/port1.png" class="img-port">
        </div>
        <div class="col-sm-12 col-lg-6">
          <center><h5 class="h-font2 h-port">PineTech</h5></center>
          <img src="img/port2.png" class="img-port">
        </div>
      </div>
      <div class="row row-port">
        <div class="col-sm-12 col-lg-6">
          <center><h5 class="h-font2 h-port">Ranjan Institute of Physics</h5></center>
          <img src="img/port3.png" class="img-port">
        </div>
      </div>
    </div>

    <div class="container-fluid con3" id="contact-con">

     <div class="con-3-1"> 
       <div class="row">
          <div class="col-sm-12 col-lg-6 con3-left">
            <center>
              <img src="img/logo-h.png"  />
            </center>
          </div>

          <div class="col-sm-12 col-lg-6">
            <center><h1 class="he4 he3">Creating brands that go beyond.</h1></center>
            <p class="text-con3 p-4">
              At MACK Studios we help you build your brand from scratch to full launch. We believe that each brand is different and the uniquness they bring is what defines them. At MACK Studios you will never be asked to settle. Give your brand the unique identity it deserves with MACK Studios.
            </p>
            <center><p><a href="#"> > Get Started</a></p></center>
          </div>
        </div>
     </div>

     <div class="con-3-2">
       <div class="row">
         <div class="col-sm-12 col-lg-6 con-3-2-l">
           <center>
             <h2 class="he4">Let us get back to you</h2>
             <form class="p-4" action="mailto:arhit0815@gmail.com" method="post" enctype="text/plain">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="name" id="name1" placeholder="Name*" required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="phone" id="phone1" placeholder="Phone">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
                </div>
                <div class="form-group">
                  <textarea type="text" class="form-control" id="desc1" name="desc" placeholder="Description"></textarea> 
                </div>
                <button type="submit" class="btn">Submit</button>
              </form>
           </center>
         </div>
         <div class="col-lg-6 col-sm-12 con-3-2-r">
           <center><h2 class="he4">Contact us</h2></center>
           <h4 class="he4 he5">Email</h4>
           <p class="text-con3 p-con-3-r">contactus@mackstudios.net</p>
           <h4 class="he4">Call us at</h4>
           <p class="text-con3 p-con-3-r">+91-8587879859</p>
         </div>
       </div>
     </div>
    </div>

    <div class="container-fluid con4">
      <center><p class="p-footer text-most">&#169 Copyright MACK Studios. All rights reserved.</p></center>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>