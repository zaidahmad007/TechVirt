

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sintony&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('project')}}/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>TechVert</title>
    <link rel="icon" href="images/icon.jpg" type="image/icon type">
    <script src="https://code.jquery.com/jquery-1.10.2.js">
    </script>
    <style>



      .abc {
        top: 40%;
        bottom: 30%;
        font-family: serif;
        font-weight:bold;
        }
        .abc h1{
          font-size: 80px;
          font-style: oblique;
        }
        .abc p{
          font-size: 40px;
          color: darkslateblue
        }
        *
        {
            font-family: 'Sintony', sans-serif;
        }
        .sticky {
    position: sticky;
    font-size: 32px;
    top: 0;
    width: 100%;
    /* padding: 1em 0; */
    color: white;
    text-align: center;

    padding-bottom: 10px;
    transition: .32s;
}

.fixed {
  font-size: 24px;
  position: fixed;
  height: 20px;
  transition: .25s;



  opacity: 999;
}

.top {
  text-align: center;
  background: #2980b9;
  color: #fff;
}



    </style>
  </head>
  <body class="bg-warning">


    <div > <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html" style=""><b>Tech</b><span class="text-warning" ><b>Vert</b></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mx-3 " style="font-family: 'Sintony', sans-serif; font-size:20px;font-weight:bold;">



          </ul>
          <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="background-color:white  ; font-family: monospace; font-weight: bold; color: black">Search</button>
          </form>-->

          <div class=" mx-2">
          <button class="btn btn-warning " data-toggle="modal" data-target="#LoginModal">Login</button>
          <button class="btn btn-warning" data-toggle="modal" data-target="#SignupModal">Sign Up</button></div>
        </div>
        </nav></div>



    <!--Navbar starts-->

@yield('content')

<!--virtual end-->

<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Sintony', sans-serif;font-weight: bold;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">Welcome To TechVert</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">

   <a   href="/login" style="background:#ffc107;color:white" type="button" class="btn btn-danger btn-lg btn-block" style="background:black;color:white"> Login
   </a>  <br>

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <!--  Signup Modal -->
  <div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Sintony', sans-serif; font-weight: bold;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupModalLabel">Welcome To TechVert </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">


         <br>


         <a type="button" href="/register" style="background:black;color:white" class="btn  btn-lg btn-block">SignUp</a>
  </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!--Testimonails ends-->


<!--Footer-->


<!--Footer ends-->
<div class="footer-top bg-dark " style="font-family: 'Sintony', sans-serif;font-weight: bold;width: 100%;color:grey">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4 footer-about wow fadeInUp animated my-5" style="visibility: visible; animation-name: fadeInUp;">
          <img class="logo-footer" src="https://source.unsplash.com/200x200/?stylish,logo" style="border-radius: 50%;" alt="logo-footer" data-at2x="assets/img/logo.png" width="74" height="85">
          <p>
            We are a young company always looking for new and creative ideas to help you with our products in your everyday work.
          </p>
          <p><a href="#">Our Team</a></p>
              </div>
        <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown animated my-5" style="visibility: visible; animation-name: fadeInDown;">
          <h3>Contact</h3>
              <p><i class="fas fa-map-marker-alt"></i> Lucknow, Uttar Pradesh, India</p>
              <p><i class="fas fa-phone"></i> Phone:(123) 456 789</p>
              <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">techvert@support.com</a></p>
              <p><i class="fab fa-skype"></i> Skype:techvert</p>
              </div>
              <div class="col-md-4 col-lg-3 footer-social wow fadeInUp animated my-5" style="visibility: visible; animation-name: fadeInUp;">
                <h3>Follow us</h3>
                <div class="" >
                    <div class="log">login</div>
                    <div class="sign ml-2">Sign up</div>
                    </div>
                <p>
                  <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
                </p>
              </div>
        </div>
    </div>
  </div>


  <script>
    AOS.init();
  </script>

<script>

    window.addEventListener("scroll",function(){


        var header=document.getElementById('header');
        header.classList.toggle("sticky",window.scrollY > 0);
    })
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <script>   var sticky = document.querySelector('.sticky');

    if (sticky.style.position !== 'sticky') {
      var stickyTop = sticky.offsetTop;

      document.addEventListener('scroll', function () {
        window.scrollY >= stickyTop ?
          sticky.classList.add('fixed') :
          sticky.classList.remove('fixed');
      });
    }
</script>
</body>
</html>
