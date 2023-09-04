<!DOCTYPE html>
<html>
<head>
  <title>We Are Available</title>
  <style>

    body {
       /* Change the text color as desired */
      font-family: Verdana, Geneva, Tahoma, sans-serif; /* Change the font family as desired */
       background-color: white;
    }
    
    h1 {
      color: #000000; /* Change the text color to white */
      font-family: Helvetica, sans-serif; /* Change the font family as desired */
    }
    
    .city-list li {
      color: #000000; /* Change the text color as desired */
      font-family: Verdana, sans-serif; /* Change the font family as desired */
    }

    header {
      position: sticky;
      top: 0;
      background-color: white;
      padding: 20px;
      text-align: center;
      z-index: 100;
    }

    h2 {
      color: #08bd80;
      font-size: 38px; /* Increased font size */
      text-shadow: 1px 1px 2px #000000; /* Added a light font shadow */
      margin-top: 0; 
    }

    .city-list {
      list-style: none;
      padding: 0;
      margin: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .city-list li {
      width: 200px;
     
      margin: 25px;
      padding: 25px;
      background-color:#08bd80 ;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
      position: relative;
      border: #000000 2px solid;
      box-shadow: 4px 2px 1px black;
    }

    .city-list li::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      transform: translateY(-50%);
      background-color:#08bd80 ; /* Set the header line color to white */
      height: 2px;
    }

    .city-list li h3 {
      margin: 0;
      position: relative;
      z-index: 1;
    }

    .sticky {
      position: sticky;
      top: 0;
      
      padding: 13px;
      color: white;
      font-size: 16px;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin: 10px;
      
      
      padding-left: 90px;
      background-color: #08bd80;
      font-size: 20px;

    }

    nav ul {
      display: flex;
      list-style: none;
      padding: 0;
      margin: 0;
      align-self: center;
    }

    nav ul li {
        align-self: center;
      margin-right: 110px;
      align-items: center;
    }

    nav ul li a {
        align-self: center;
      text-decoration: none;
      color: #000000; 
    }
    .b{
      margin: 0;
      padding-top: -10px;
    }
    
  </style>
  <script>
    function goToNewPage(url) {
      window.location.href = url;
    }
  </script>
</head>
<body>
<div class="b"> <nav>
      <ul>
        <li><a id="Home" href="home.php">Home</a></li>
    
      
        <li><a id="service-link" href="faq.php">Faq</a></li>
        <li><a id="Solutions-link" href="challenges.html">Solutions</a></li>
        <li><a id="why us-link" href="whyus.html">Why_us</a></li>
        <li><a id="why us-link" href="aboutus.html">About_us</a></li>
      </ul>
     
    </nav></div>

 


  <header >
  
    <h2>Which magical part of hyderbad are u interested in?</h2>
  </header>


<div class="a" >
  
<ul class="city-list">
    <li onclick="goToNewPage('.html')">
      <h3></h3>
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
      
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
  </ul>

  <ul class="city-list">
    <li onclick="goToNewPage('.html')">
      <h3></h3>
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
      
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
  </ul>

  <ul class="city-list">
    <li onclick="goToNewPage('.html')">
      <h3></h3>
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
      
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
  </ul>

  <ul class="city-list">
    <li onclick="goToNewPage('.html')">
      <h3></h3>
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
      
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
  </ul>

  <ul class="city-list">
    <li onclick="goToNewPage('.html')">
      <h3></h3>
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
      
    </li>
    <li onclick="goToNewPage('.html')">
      <h3></h3>
  </ul>


  
</div>
 
  


  
    
   
 

    
    
   


 


  
</body>
</html>
