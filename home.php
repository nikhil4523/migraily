

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- custom css file link  -->
   

   <style>
    
   
    body {
       
       /* Changed background color to white */
      margin: 0;
      padding: 0;
    }

   
    header {
        background: linear-gradient(-45deg, #9ee4ce, #ffffff, #8edcca, #aaf2e1);

 height: 100vh;
      display: flex;
      flex-direction: row;
      text-align: center;
      flex-wrap: wrap;
align-items: center;
    justify-content: center;
    align-content:flex-start;
    }

    
    h1 {
        color: #08bd80;
      font-size: 10dvw;
      text-shadow: 2px 2px 1px #000000; /* Added a light font shadow */
      padding-left: 10px;
     
     
      
    }
    .login-button {
font-style: italic;      
     color: #000000; /* Changed button font color */
     cursor: pointer;
     border-radius: 4px;
     font-weight: bold;
     text-decoration: none;
     transition: transform 0.3s ease-in-out; /* Added transition for button */
     font-size: min(6vw ,30px); /* Increased font size */
    
     background-color: #08bd80;
   }

   .login-button:hover {
     transform: scale(1.1);
     color: red;

   }
    .header-text {
      margin-top: 20px;
      font-size: 2vw;
      color: #3c4852; 
    }
 

    
    nav {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      width: 100vw;
      padding-left: min(90px,1vw);
      background-color: #08bd80;
      font-size: min(20px,6vw);
      flex-wrap: nowrap;


    }

    nav ul {
      display: flex;
      list-style: none;
      margin-left: 2vw;
 margin-right: 2vw;
 margin-top: 0;
 margin-left: 0;
      align-self: center;
      flex-wrap: nowrapwrap;
    }

    nav ul li {
        display: flex;
        align-self: center;
      margin-right: 1vw;
      align-items: center;
      flex-wrap: nowrap;
    }

    nav ul li a {
      padding-left: 2vw;
        align-self: center;
      text-decoration: none;
      color: #000000; 
      margin-left: 3px;
 margin-right: 2vw;
 margin-top: 0.1vw;
 margin-left: 1vw;
 font-size : min(20px,4vw);

    }

   .a{
    position: relative;
    height: 50%;
    width: 50%;
    
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: center;
    
   }

    
    footer {
      text-align: center;
      padding: 20px;
      background-color: #08bd80; /* Changed footer background color */
      color: #000000; /* Changed footer font color */
    }

    
    .social-media-icons {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 10px;
    }

    .social-media-icons img {
      height: 24px;
      width: 24px;
      margin-left: 10px;
    }
    #logo {
        position: absolute;
        height: 20vw;
        width: 36vw;
       
    }
    #a1{
        display: flex;
        justify-content: flex-end;
        align-content: flex-end;
    }

    #a2{
        display: flex;
        align-content: flex-start;
    }

    H6{
      color: #000000;
    }

    p{
      color: #000000;
    }

  </style>
 
</head>
<body>

<nav>
      <ul>
        
        <li><a id="Home" href="home.php">Home</a></li>
      <li><a id="service-link" href="faq.html">Faq</a></li>
        <li><a id="why us-link" href="whyus.html">Why_us</a></li>
        <li><a id="subscription.php" href="subscription.php">get migraily premium </a></li>
      </ul>
     
    </nav>

  <header>

<div class="a" >   <img src="project images/Untitled_design__2_-removebg-preview (1).png" alt="logo" id="logo">
</div>
<div>.</div>

<div  class="a" id="a2">      <h1>MIGRAILY</h1>
    <p class="header-text">Your ultimate guide to seamless city migration!</p>
     <div class="social-media-icons">
        <a href="https://www.facebook.com/profile.php?id=100095013489473"><img src="60 places to try/OIP.jpeg" alt="Facebook"></a>
        <a href="https://www.linkedin.com/company/migraily/"><img src="60 places to try/linkedin-icon-logo-png-transparent.png" alt="Linkdin"></a>
        <a href="https://instagram.com/migraily?igshid=ZDc4ODBmNjlmNQ=="><img src="60 places to try/R.jpeg" alt="Instagram"></a>
      </div>
</div>

<div  class="a" >  <a id="login-link" class="login-button" href="home2.php">LET's START</a> </div>



 </div>




  

    


    
   
    
  </header>


  <footer>
    <p><section class="p-4" style="background-color: #eee;">
   
      <footer class="text-center text-lg-start bg-white text-muted">
   
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    
          <div class="me-5 d-none d-lg-block">
            <span style="color: #000000;">Get connected with us on social networks:</span>
          </div>
          
          <div>
            <a href="https://www.facebook.com/profile.php?id=100095013489473" class="me-4 link-secondary">
              <i style="color: #000000;" class="fab fa-facebook-f">Facebook</i>
            </a>
            <BR>
            </a>
            <a href="https://instagram.com/migraily?igshid=ZDc4ODBmNjlmNQ==" class="me-4 link-secondary">
              <i  style="color: #000000;" class="fab fa-instagram">Instagram</i>
              <BR>
            </a>
            <a href="https://www.linkedin.com/company/migraily/" class="me-4 link-secondary">
              <i  style="color: #000000;" class="fab fa-linkedin">Linkdin</i>
            </a>
            
          </div>
       
        </section>
      
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3 text-secondary"></i>MIGRAILY
                </h6>
                <p>
                  Your beginning of love, hope & dreams!
                </p>
              </div>
              <HR>
            
             
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
             
                <p>
                  <a   style="color: #000000;"href="about.php" class="text-reset">about</a>
                </p>
                <p>
                  <a  style="color: #000000;" href="hyderbad.html" class="text-reset">city coverd by migraily</a>
                </p>
                <p>
                  <a  style="color: #000000;" href="faq.html" class="text-reset">Help</a>
                </p>
              </div>

              
             
              <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3 text-secondary"></i> IIT hyderbad ,Telangana,India</p>
                <p>
                  <i class="fas fa-envelope me-3 text-secondary"></i>
                  migraily4523@gmail.com
                </p>
                <p><i class="fas fa-phone me-3 text-secondary"></i> + 7499816792</p>
                <p><i class="fas fa-print me-3 text-secondary"></i> + 7021627008</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div  class="text-center p-4" style="background-color: #000000;">
          © 2023 Copyright:
          <a  style="color: #000000;" class="text-reset fw-bold" href="">MIGRAILY</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </section></p>
  </footer>
</body>
</html>
